<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\OrderTemp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    public function temp_create(Request $request)
    {
        $product = Product::where('id', $request->product_id)->first();
        $total_stock = $product->stock - $request->quantity;

        // cek ketersediaan stok
        if ($total_stock < 0) {
            Alert::warning('Stok tidak mencukupi!', 'Silahkan tambahkan stok terlebih dahulu');
            return back();
        } else {
            $temp = OrderTemp::where('product_id', $request->product_id)->first();

            // cek apakah data yg di tambahkan itu sama
            if (!empty($temp) || $temp == !null) {
                $total_stock = $product->stock - ($temp->quantity + $request->quantity);

                // cek ketersediaan stok
                if ($total_stock < 0) {
                    Alert::warning('Stok tidak mencukupi!', 'Silahkan tambahkan stok terlebih dahulu');
                    return back();
                } else {
                    // menambahkan quantity produk yg lama
                    $temp->quantity = $temp->quantity + $request->quantity;

                    // mengupdate subharga
                    $temp->sub_price = $product->price * $temp->quantity;

                    $temp->update();
                    return back();
                }
            } else {

                // masukkan ke tabel sementara
                $temp = new OrderTemp();
                $temp->product_id = $request->product_id;
                $temp->quantity = $request->quantity;
                $temp->user_unique = Session::getId();
                $temp->sub_price = $product->price * $request->quantity;

                $temp->save();
                return back();
            }
        }
    }

    public function temp_destroy($id)
    {
        $temp = OrderTemp::find($id);
        $temp->delete();
        return back();
    }

    public function temp_update(Request $request, $id)
    {
        $action = $request->input('action');
        $slug = $request->input('product_slug');

        $temp = OrderTemp::where('id', $id)->first();
        $product = Product::where('product_slug', $slug)->first();

        if ($action === 'add') {
            // var_dump($action, $slug, $temp, $product);
            $total_stock = $product->stock - ($product->quantity + 1);
            if ($total_stock < 0) {
                Alert::warning('Stok tidak mencukupi!', 'Silahkan tambahkan stok terlebih dahulu');
                return back();
            } else {
                $temp->quantity = $temp->quantity + 1;
                $temp->sub_price = $product->price * $temp->quantity;
                $temp->update();

                return response()->json([
                    'success' => true,
                    'quantity' => $temp->quantity,
                    'sub_price' => $temp->sub_price
                ]);
            }
        } elseif ($action === 'remove') {
            // var_dump($action, $slug, $temp, $product);

            $temp->quantity = $temp->quantity - 1;
            $temp->sub_price = $product->price * $temp->quantity;
            $temp->update();

            return response()->json([
                'success' => true,
                'quantity' => $temp->quantity,
                'sub_price' => $temp->sub_price,
            ]);
        }
    }

    public function checkout()
    {
        $session = session()->getId();

        $temps = OrderTemp::join('products', 'order_temps.product_id', '=', 'products.id')
            ->select('order_temps.*', 'products.product_name', 'products.thumbnail', 'products.price', 'products.product_slug')->where('order_temps.user_unique', $session)->get();

        $count = $temps->count();

        return view('shop-checkout', compact('temps', 'count'));
    }

    public function order_create(Request $request)
    {
        var_dump('oke');
    }
}
