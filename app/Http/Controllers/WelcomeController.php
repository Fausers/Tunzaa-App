<?php

namespace App\Http\Controllers;

use App\Models\Azam\FrontContent;
use App\Models\Azam\Slider;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        return redirect()->route('shop');
    }

    public function index()
    {
        return redirect()->route('shop');
    }
}
