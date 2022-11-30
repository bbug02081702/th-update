<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MotelsController extends Controller
{
    //
    public function index(){
        return view('home.index');
    }
    public function register(){
        return view('home.dangky');
    }
}
