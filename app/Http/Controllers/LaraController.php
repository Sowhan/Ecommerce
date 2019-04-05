<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaraController extends Controller
{
    public function index(){
        return view('layouts.master');
    }
}
