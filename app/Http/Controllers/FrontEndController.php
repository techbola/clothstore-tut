<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{

    public function index()
    {
    return view('front.index');
    }
    public function store()
    {
        return view('front.store');
    }
    public function blog()
    {
        return view('front.blog');
    }

    public function contact()
    {
        return view('front.contact');
    }

}
