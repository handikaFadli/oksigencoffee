<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $product = Product::join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.*', 'categories.category_name', 'categories.category_slug')
            ->orWhere('product_name', 'LIKE', '%' . $search . '%')
            ->orWhere('category_name', 'LIKE', '%' . $search . '%')
            ->oldest()->paginate(10)->withQueryString();
        return view(
            'admin.product.index',
            [
                'data' => $product,
                'judul' => 'Products'
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'admin.product.create',
            [
                'title' => 'Add Product',
                'menu' => 'Products',
                'category' => Category::all(),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'product_name' => 'required',
                'product_slug' => 'required',
                'category_id' => 'required',
                'quantity' => 'required|numeric',
                'stock' => 'required|numeric',
                'price' => 'required|numeric',
                'link' => 'required',
                'description' => 'required',
                'status' => 'required',
                'thumbnail' => 'required',
                'thumbnail.*' => 'image|mimes:jpeg,png,jpg'
            ]
        );

        $input = $request->all();

        if ($request->hasFile("thumbnail")) {

            $image = $request->file("thumbnail");
            $destinationPath = "assets-admin/media/products";
            $profileImage = date("YmdHis") . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input["thumbnail"] = "$profileImage";
        }

        Product::create($input);

        // Alert::success('Data Pelatih', 'Berhasil Ditambahkan!');
        return redirect('/admin/product');
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
        return view(
            'admin.product.edit',
            [
                'title' => 'Add Product',
                'menu' => 'Products',
                'category' => Category::all(),
                'product' => $product
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate(
            [
                'product_name' => 'required',
                'product_slug' => 'required',
                'category_id' => 'required',
                'quantity' => 'required|numeric',
                'stock' => 'required|numeric',
                'price' => 'required|numeric',
                'link' => 'required',
                'description' => 'required',
                'status' => 'required',
                'thumbnail.*' => 'image|mimes:jpeg,png,jpg'
            ]
        );
        $input = $request->all();

        if ($request->hasFile("thumbnail")) {
            File::delete('assets-admin/media/products/' . $product->thumbnail);

            $image = $request->file("thumbnail");
            $destinationPath = "assets-admin/media/products/";
            $profileImage = date("YmdHis") . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input["thumbnail"] = "$profileImage";
        } else {
            unset($input["thumbnail"]);
        }

        $product->update($input);
        return redirect('/admin/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        File::delete('assets-admin/media/products/' . $product->thumbnail);
        $product->delete();
        return redirect('/admin/product');
    }
}
