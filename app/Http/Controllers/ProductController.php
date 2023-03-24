<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers\UserController;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use App\Models\Cart;
use App\Models\Order;
use Sesssion;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();

        return view('product', ['product' => $data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }
    function search(Request $req)
    {
        $data = Product::where('name', 'like', '%' . $req->input('query') . '%')
            ->get();
        return view('search', ['products' => $data]);
    }
    function addToCart(Request $req)
    {
        //to add data in the database
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
        $userId = Session()->get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }
    function cartlist()
    {
        // USING JOINT WITH PRODUCT ID WE CAN GET ALL INFORMATION
        // $products = DB::table('cart')->join('products','cart.product_id')
        $userId = Session()->get('user')['id'];
        $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cart_id')
            ->get();
        return view('cartlist', ['products' => $products]);
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow()
    {
        // to abtain the total price of all product order by 1 user
        $userId = Session()->get('user')['id'];
        $total = $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');

        return view('ordernow', ['total' => $total]);
    }
    // to take which method of payment has beed chose by the user and the address
    function orderPlace(Request $req)
    // need to get back all the data from the cart table in the database
    {
        $userId = Session()->get('user')['id']; //session id
        $allCart = Cart::where('user_id', $userId)->get();
        foreach ($allCart as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }
        $req->input();
        return redirect('/');
    }
    function myOrders(){
        $userId = Session()->get('user')['id'];
        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $userId)
            ->get();

        return view('myorders', ['myorders' => $orders]);
    }
}
