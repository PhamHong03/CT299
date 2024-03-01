<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home(){
        return view('clients.home');
    }
    public function about(){
        return view('clients.about');
    }
    public function products(){
        return view('clients.products');
    }
    public function register(){
        return view('clients.register');
    }
}
