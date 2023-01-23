<?php

namespace App\Http\Controllers\Tunzaa;

use App\Http\Controllers\Controller;
use App\Models\Tunzaa\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $products = $user->shop->products;
        return view('pms.products.index',compact('products'));
    }

    public function create()
    {
        $user = Auth::user();
        $shop = $user->shops->first();
        return view('pms.products.create',compact('shop'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $request['user_id'] = $user->id;
        $request['shop_id'] = $user->shops->first()->id;

        if (isset($request['file'])) {
            $request['image'] = $this->upload_image($request['file']);
        }

        Product::create($request->all());
        return redirect()->route('shop_products');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('pms.products.show',compact('product'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        $product = Product::find($id);
        $shop = $user->shops->first();
        return view('pms.products.edit',compact('shop','product'));
    }

    public function update(Request $request, $id)
    {
        if (isset($request['file'])) {
            $request['image'] = $this->upload_image($request['file']);
        }

        $product = Product::find($id);
        $product->update($request->all());

        return redirect()->route('shop_products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->back();
    }

    public function upload_image($file)
    {

            $file_type = $file->extension();

            $file_name  = microtime(true).".".$file_type;

            // $file_size = $file->getClientSize();

            $file->move('uploads/products/',$file_name);

            return $request['image_url'] = 'uploads/products/'.$file_name;

    }
}
