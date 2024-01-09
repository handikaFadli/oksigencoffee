<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $data = Product::get();
        $categories = Category::get();

        return view('shop', compact('data', 'categories'));
    }

    public function show(Product $product)
    {
        $data = DB::table('products')
            ->where('slug', $product->slug)->first();

        $gambar = ProductImage::where('product', $product->slug)->get();


        return view('shop-detail', compact('data', 'gambar'));
    }
}
