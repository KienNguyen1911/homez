<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * List of provinces Ha Noi, Ho Chi Minh, Da Nang with gso_id
     */
    const PROVINCES = [
        'HANOI' => '01',
        'HOCHIMINH' => '79',
        'DANANG' => '48',
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with(['province', 'district', 'ward'])->paginate(20);
        foreach ($products as $product) {
            $product->main_image = asset('storage/' . $product->main_image);
        }
        return view('pages.admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinces = \Kjmtrue\VietnamZone\Models\Province::whereIn('gso_id', self::PROVINCES)->get();

        return view('pages.admin.products.create', compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        try {
            DB::beginTransaction();
            // save image to storage
            $images = [];
            $data = $request->all();
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    // change file name before store
                    $path = $image->store('products/images', 'public');
                    $images[] = $path;
                }
            }
    
            if ($request->hasFile('main_image')) {
                $data['main_image'] = $request->main_image->store('product/images', 'public');
            }
            $data['images'] = $images;
            
            Product::create($data);
            DB::commit();
            toastr()->success('Data has been saved successfully!');

            return redirect()->route('admin.products.index');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            toastr()->error('Data has not been saved successfully!');
            DB::rollBack();

            return redirect()->route('admin.products.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $provinces = \Kjmtrue\VietnamZone\Models\Province::whereIn('gso_id', self::PROVINCES)->get();
        $product = Product::findOrFail($id);

        return view('pages.admin.products.edit', compact('provinces', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            if ($request->hasFile('main_image')) {
                // remove old image
                Storage::disk('public')->delete($product->main_image);

                $filename = $request->name . '-' . time() . '.' . $request->main_image->extension();
                $path = $request->main_image->storeAs('products/images', $filename, 'public');
                $product->main_image = $path;
                $data['main_image'] = $path;
            }

            $product->update($data);
            DB::commit();
            toastr()->success('Data has been updated successfully!');

            return redirect()->route('admin.products.index');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            toastr()->error('Data has not been updated successfully!');
            DB::rollBack();

            return redirect()->route('admin.products.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        try {
            DB::beginTransaction();
            // remove old image
            if ($product->main_image) {
                Storage::disk('public')->delete($product->main_image);
            }
            $product->delete();
            DB::commit();
            toastr()->success('Data has been deleted successfully!');

            return redirect()->route('admin.products.index');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            toastr()->error('Data has not been deleted successfully!');
            DB::rollBack();

            return redirect()->route('admin.products.index');
        }
    }

    public function getDistricts($province)
    {
        $districts = \Kjmtrue\VietnamZone\Models\District::where('province_id', $province)->get();

        return response()->json($districts);
    }
    
    public function getWards($district)
    {
        $wards = \Kjmtrue\VietnamZone\Models\Ward::where('district_id', $district)->get();

        return response()->json($wards);
    }
}
