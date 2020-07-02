<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // $letters = ['Aa', 'Bb', 'Cc'];
        // return view('welcome', ['letters' => $letters]);
        // return view('welcome', compact('letters'));
        return view('home');
    }
}
