<?php

namespace App\Http\Controllers;

use App\Models\Azam\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $sliders = Slider::get();
        return view('sliders.index',compact('sliders'));
    }


    public function create()
    {
        return view('sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if (isset($request['image'])) {
            $request['image_url'] = $this->upload_image($request['image']);
        }

        $request['user_id'] = Auth::user()->id;
        $slider = Slider::create($request->all());

        return redirect()->route('sliders');
    }


    public function show($id)
    {
        $slider = Slider::findOrFail($id);
        return view('sliders.show',compact('slider'));
    }


    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('sliders.edit',compact('slider'));
    }


    public function update($id, Request $request): \Illuminate\Http\RedirectResponse
    {
        if (isset($request['image'])) {
            $request['image_url'] = $this->upload_image($request['image']);
        }
        $slider = Slider::findOrFail($id);
        $slider->update($request->all());

        return redirect()->route('sliders');
    }


    public function destroy($id)
    {
        Slider::destroy($id);
        return redirect()->back();

    }

    public function activate($id): \Illuminate\Http\RedirectResponse
    {
        $slider = Slider::where('id',$id)->withTrashed()->first();
        $slider->deleted_at = null;
        $slider->save();

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
