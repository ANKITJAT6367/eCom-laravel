<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $data = Product::where('name', 'like', '%' . $req->input('query') . '%')->get();
        return view('search', ['products' => $data]);
    }
    public function addtocart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }
    // public function cartList()
    // {
    //     $userId = Session::get('user')['id'];
    //     $data = DB::table('cart')
    //         ->join('products', 'cart.product_id', 'products.id')
    //         ->select('products.*','cart.id as cart_id')
    //         ->where('cart.user_id', $userId)
    //         ->get();
    //     return view('cartlist', ['products' => $data]);
    // }
    public function cartList()
    {
        $user = Session::get('user');
        if ($user) {
            $userId = $user['id'];
            $data = DB::table('cart')
                ->join('products', 'cart.product_id', 'products.id')
                ->select('products.*', 'cart.id as cart_id')
                ->where('cart.user_id', $userId)
                ->get();
            return view('cartlist', ['products' => $data]);
        }
        return redirect('/login');
    }


    public function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
}
