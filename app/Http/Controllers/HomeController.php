<?php

namespace App\Http\Controllers;

use App\PaymentGateway\Payment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index($locale = 'en') {
        Payment::process();
        // $letters = ['Aa', 'Bb', 'Cc'];
        // return view('welcome', ['letters' => $letters]);
        // return view('welcome', compact('letters'));
        App::setLocale($locale );
        $users = User::paginate(10);

        return view('home', compact('users'));
    }
}
