<?php

namespace App\Http\Controllers;

use App\Models\Azam\Other;
use Illuminate\Http\Request;
use App\Models\About;


class CRMController extends Controller
{
    public function about()
    {
        $about = About::first();
        return view('crm.about',compact('about'));
    }

    public function updateAbout(Request $request)
    {
        $about = About::first();

        if (isset($request['new_image'])) {
            $request['image'] = $this->upload_image($request['new_image']);
        }

        $about->update($request->all());

        return redirect()->back();
    }

    public function upload_image($file)
    {

        $file_type = $file->extension();

        $file_name  = microtime(true).".".$file_type;

        // $file_size = $file->getClientSize();

        $file->move('uploads/about/',$file_name);

        return $request['image_url'] = 'uploads/about/'.$file_name;

    }

    public function others()
    {
        $others = Other::first();

        return view('crm.others',compact('others'));
    }

    public function updateOthers(Request $request): \Illuminate\Http\RedirectResponse
    {
        $others = Other::first();
        if (isset($request['new_image'])) {
            $request['contacts_image'] = $this->upload_image($request['new_image']);
        }
        $others->update($request->all());

        return redirect()->back();
    }
}
