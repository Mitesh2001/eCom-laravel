<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }
    public function details($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }
    public function search(Request $req)
    {
        $data = Product::where("name", "like", "%".$req->input("query")."%")->get();
        return view('search', ['products' => $data]);
    }
    public function AddToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new Cart;
            $cart->product_id = $req->product_id;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->save();
            return redirect('/');
        } else {
            return redirect('login');
        }
    }
    public static function CartItems()
    {
        return Cart::where('user_id', session()->get('user')['id'])->count();
    }
}
