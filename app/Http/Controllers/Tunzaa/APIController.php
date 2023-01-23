<?php

namespace App\Http\Controllers\Tunzaa;

use App\Http\Controllers\Controller;
use App\Models\Tunzaa\Order;
use App\Models\Tunzaa\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class APIController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['products']]);
    }
    public function products()
    {
        $products = Product::paginate(20);
        return response($products)->header('Content-Type', 'text/plain');
    }

    public function createOrder(Request $request)
    {
        $user = Auth::user();
        $product = Product::find($request['product_id']);

        $order = new Order;
        $order->product_id = $request['product_id'];
        $order->amount = $product->price;
        $order->user_id = $user->id;
        $order->payment_method = $request['payment_method'];

        if ($request['payment_method'] == 'card'){
            $order->address = $request['address'];
            $order->card_number = $request['card_number'];
        }

        $user->order()->save($order);

        return response('Order Created')->header('Content-Type', 'json');
    }
}
