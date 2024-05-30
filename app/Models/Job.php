<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Arr;

class Job extends Model {
    use HasFactory;

    protected $table = 'job_listing';

    protected $fillable = ['title', 'salary'];
}