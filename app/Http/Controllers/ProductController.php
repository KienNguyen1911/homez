<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

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
        return view('pages.admin.products.index');
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
        // save image to storage
        $images = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products/images', 'public');
                $images[] = $path;
            }
        }

        $product = Product::create($request->all());
        
        return redirect()->route('admin.products.index');
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
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
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
