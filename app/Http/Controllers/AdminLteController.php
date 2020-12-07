<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLteController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function login(){
        return view('auth/login');
    }


    public function index(){
        return view('index');
    }

    public function starter(){
        return view('starter');
    }

    public function index2(){
        return view('index2');
    }
}
