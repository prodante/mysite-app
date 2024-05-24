<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index', [
            'jobs' => [
                [
                    'title' => 'Director',
                    'salary' => '50,000'
                ],
                [
                    'title' => 'Programmer',
                    'salary' => '10,000'
                ],
                [
                    'title' => 'Teacher',
                    'salary' => '40,000'
                ],
                [
                    'title' => 'User',
                    'salary' => '5,000'
                ]
            ]
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
