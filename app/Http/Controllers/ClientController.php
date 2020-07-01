<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPosts()
    {
        $response = Http::get('http://jsonplaceholder.typicode.com/posts/');
        return $response->json();
    }

    public function getPostById($id)
    {
        $response = Http::get('http://jsonplaceholder.typicode.com/posts/' . $id);
        return $response->json();
    }

    // public function addPost()
    // {
        // $data = [
        //     'userId' => 1,
        //     'title' => 'new title',
        //     'body' => 'new body'
        // ];
        // $response = Http::post('http://jsonplaceholder.typicode.com/posts', $data);
        // return $response->join();
    // }

    // public function updatePost($id)
    // {
    //     $data = [
    //         'userId' => 1,
    //         'title' => 'new title',
    //         'body' => 'new body'
    //     ];
    //     $response = Http::put('http://jsonplaceholder.typicode.com/posts/' . $id, $data);
    //     return $response->join();
    // }
}
