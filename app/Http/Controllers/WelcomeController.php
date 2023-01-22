<?php

namespace App\Http\Controllers;

use App\Models\Azam\FrontContent;
use App\Models\Azam\Slider;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $front = FrontContent::first();
        $sliders = Slider::get();
        return view('index',compact('front','sliders'));
    }

    public function index()
    {
        $front = FrontContent::first();
        $sliders = Slider::get();
        return view('welcome',compact('front','sliders'));
    }
}
