<?php

namespace App\Http\Controllers;

use App\Models\LaravelTest2;
use Illuminate\Http\Request;

class Laraveltest2Controller extends Controller
{
    public function get()
    {
    return view('index');
    }

    public function add()
    {
    return view('thanks');
    }
}
