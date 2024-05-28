<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/jobs', function() {
    return view('jobs', ['jobs' => Job::all()]);
 });

Route::get('/jobs/{id}', function($id) {
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});

Route::get('/contact', [MainController::class, 'contact'])->name('contact');