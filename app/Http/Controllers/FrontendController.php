<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend/dashboard');
    }

    public function about(){
        return view('frontend/about/about');
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 53aa5fd (Praktikum)

    public function produk(){
        return view('frontend/produk');
    }

    public function store(){
        return view('frontend/store');
    }
<<<<<<< HEAD
=======
=======
>>>>>>> cba2684 (Praktikum 8)
>>>>>>> 53aa5fd (Praktikum)
}
