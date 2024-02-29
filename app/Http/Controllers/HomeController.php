<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserInfoRequest;
use App\Models\Product;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with(['province', 'district', 'ward'])->paginate(8);
        foreach ($products as $product) {
            $product->main_image = asset('storage/' . $product->main_image);
        }

        $provinces = \Kjmtrue\VietnamZone\Models\Province::whereIn('gso_id', Product::PROVINCES)->get();
        return view('pages.index', compact('products', 'provinces'));
    }
}
