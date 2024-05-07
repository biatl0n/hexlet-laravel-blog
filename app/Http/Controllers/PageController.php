<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('page.about');
    }

    public function index()
    {
        return view('index');
    }
}
