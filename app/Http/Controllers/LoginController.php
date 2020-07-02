<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function loginSubmit(LoginFormRequest $request) {
        // return $request->all();

        // $request->validate([
        //     'txtEmail' => 'required|regex:/^[0-9]{3,}$/',
        //     'txtPassword' => 'required|min:6|max:15|numeric'
        // ]);

        $validator = Validator::make($request->all(), $request->rules(), $request->messages());

        if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $txtName = $request->get('txtEmail');
        $txtPassword = $request->get('txtPassword');
        return 'Name: ' . $txtName . ' - Password: ' . $txtPassword; 
    }

}
