<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class UploadController extends Controller
{
    public function uploadForm($locale = 'en') {
        // $locale = null
        App::setLocale($locale);
        return view('upload');
    }

    public function uploadFile(Request $request) {
        // $request->file->store('public');
        $request->file->store('images');
        // var_dump($request->file);
        return 'File has been upload successfully!';
    }
}
