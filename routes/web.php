<?php

use Illuminate\Support\Arr;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

class Job {
    public static function all() {
        return 
        [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '50,000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '10,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '40,000'
            ]
        ];
    }
}

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/jobs', function() {
    return view('jobs', ['jobs' => Job::all()]);
 });

Route::get('/jobs/{id}', function($id) {
    $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);
    return view('job', ['job' => $job]);
});

Route::get('/contact', [MainController::class, 'contact'])->name('contact');