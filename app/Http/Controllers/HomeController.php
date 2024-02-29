<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with(['province', 'district', 'ward'])->paginate(8);
        foreach ($products as $product) {
            $product->main_image = asset('storage/' . $product->main_image);
        }
        return view('pages.index', compact('products'));
    }
}
