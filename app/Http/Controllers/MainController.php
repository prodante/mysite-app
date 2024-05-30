<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function jobs()
    {
        return view('jobs');
    }

    public function contact()
    {
        return view('contact');
    }
}
