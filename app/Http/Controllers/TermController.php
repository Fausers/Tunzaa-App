<?php

namespace App\Http\Controllers;

use App\Models\Azam\Term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    //

    public function terms()
    {
        $terms = Term::first();
        return view('terms',compact('terms'));
    }

    public function index()
    {
        $terms = Term::first();
        return view('terms.edit',compact('terms'));
    }

    public function update(Request $request)
    {
        $terms = Term::first();
        $terms->update($request->all());


        return view('terms.edit',compact('terms'));
    }
}
