<?php

namespace App\Http\Controllers;

use App\Models\Azam\FrontContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontContrntController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $front = FrontContent::first();
        return view('front.show',compact('front'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $slider = FrontContent::create($request->all());

        return redirect()->route('sliders');
    }


    public function show($id)
    {
        $slider = FrontContent::findOrFail($id);
        return view('sliders.show',compact('slider'));
    }


    public function edit()
    {
        $front = FrontContent::first();
        return view('front.edit',compact('front'));
    }


    public function update( Request $request)
    {
        if (isset($request['new_app_image'])) {
            $request['app_image'] = $this->upload_image($request['new_app_image']);
        }

        if (isset($request['new_bills_image'])) {
            $request['bills_image'] = $this->upload_image($request['new_bills_image']);
        }

        if (isset($request['new_tariffs_image'])) {
            $request['tariffs_image'] = $this->upload_image($request['new_tariffs_image']);
        }
//        return $request;

        $slider = FrontContent::first();
        $slider->update($request->all());

        return redirect()->route('front');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): \Illuminate\Http\Response
    {
        FrontContent::destroy($id);
        return redirect()->back();

    }

    public function activate($id): \Illuminate\Http\RedirectResponse
    {
        $slider = FrontContent::where('id',$id)->withTrashed()->first();
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
