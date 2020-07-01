<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function loginSubmit(Request $request) {
        // return $request->all();
        $txtName = $request->get('txtName');
        $txtPassword = $request->get('txtPassword');
        return 'Name: ' . $txtName . ' - Password: ' . $txtPassword; 
    }

}
