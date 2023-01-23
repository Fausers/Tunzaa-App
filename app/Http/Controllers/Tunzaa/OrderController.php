<?php

namespace App\Http\Controllers\Tunzaa;

use App\Http\Controllers\Controller;
use App\Models\Tunzaa\Order;
use App\Models\Tunzaa\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create($product_id)
    {
        $product = Product::find($product_id);

        return view('order.create',compact('product'));
    }

    public function store(Request $request,$product_id)
    {
        $user = Auth::user();
        $product = Product::find($product_id);

        $order = new Order;
        $order->product_id = $product_id;
        $order->amount = $product->price;
        $order->user_id = $user->id;
        $order->payment_method = $request['payment_method'];

        if ($request['payment_method'] == 'card'){
            $order->address = $request['address'];
            $order->card_number = $request['card_number'];
        }

        $user->order()->save($order);

        return redirect()->route('my_orders');
    }

    public function myOrders()
    {
        $orders = Auth::user()->orders;
        return view('order.orders',compact('orders'));
    }
}
