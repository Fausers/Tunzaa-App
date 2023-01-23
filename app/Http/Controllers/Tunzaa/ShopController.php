<?php

namespace App\Http\Controllers\Tunzaa;

use App\Http\Controllers\Controller;
use App\Models\Tunzaa\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function shop()
    {
        $products = Product::paginate(20);
        return view('shop.products',compact('products'));
    }
    public function product($id)
    {
        $product = Product::find($id);
        return view('shop.product',compact('product'));
    }


}
