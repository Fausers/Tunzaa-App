<?php

namespace App\Http\Controllers;

use App\Models\Azam\Tariff;
use App\Models\Azam\TariffImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TariffController extends Controller
{
    public function tariffs()
    {
        $tariffs = Tariff::orderBy('order')->get();
        $tariff_image = TariffImage::first();
        return view('tariffs',compact('tariffs','tariff_image'));
    }

    public function index($ability, $arguments = [])
    {
        $tariffs = Tariff::orderBy('order')->get();
        $tariff_image = TariffImage::first();
        return view('tariffs.index',compact('tariff_image'));

    }

    public function create()
    {
        $tariff = new Tariff;
        return view('tariffs.create',compact('tariff'));
    }

    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;

        Tariff::create($request->all());
        return redirect()->route('tariffs');
    }

    public function storeImage(Request $request)
    {
        if (isset($request['new_image'])) {
            $request['image'] = $this->upload_image($request['new_image']);
        }
        
        $image = TariffImage::first();

        $image->update($request->all());
        return redirect()->back();
    }

    public function edit($id)
    {
        $tariff = Tariff::findOrFail($id);
        return view('tariffs.create',compact('tariff'));
    }

    public function update($id, Request $request): \Illuminate\Http\RedirectResponse
    {

        $tariff = Tariff::findOrFail($id);
        $tariff->update($request->all());

        return redirect()->route('tariffs');
    }

    public function destroy($id)
    {
        Tariff::destroy($id);
        return redirect()->back();

    }

    public function upload_image($file)
    {

        $file_type = $file->extension();

        $file_name  = microtime(true).".".$file_type;

        // $file_size = $file->getClientSize();

        $file->move('uploads/sliders/',$file_name);

        return $request['image_url'] = 'uploads/sliders/'.$file_name;

    }
}
