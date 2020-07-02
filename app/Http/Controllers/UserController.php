<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index() {

        /** Eloquent ORM CRUD */
        /** Insert */
        // $users = new User([
        //     'name' => 'hoaipx', 
        //     'email' => 'hoaipx@gmail.com', 
        //     'password' => '123456'
        // ]);

        // $users->save();

        // $data = [
        //     'name' => 'admin123', 
        //     'email' => 'admin123@gmail.com', 
        //     'password' => bcrypt('123456')
        // ];

        // User::create($data);

        /** Select */
        // $users = new User();
        // return $users->all();
        // return User::all();
        // return User::orderBy('id', 'desc')->get();
        // return User::where('email', 'like', '%@%')->orderBy('id', 'desc')->get();

        /** Delete */
        // User::where('id', '=', 7)->delete();

        /** Update */
        // $user = User::find(8);
        // $user->password = bcrypt('123456');
        // $user->save();
        // User::where('id', '=', 6)->update([
        //     'name' => 'admin'
        // ]);

        // dd($users);
        // var_dump($users);

        /** Raw Expressions Raw Expressions Raw Expressions Raw Expressions Raw Expressions Raw Expressions Raw Expressions */
        /** Raw Expressions Raw Expressions Raw Expressions Raw Expressions Raw Expressions Raw Expressions Raw Expressions */
        /** Raw Expressions Raw Expressions Raw Expressions Raw Expressions Raw Expressions Raw Expressions Raw Expressions */
        // DB::table('users')->insert([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => '123456'
        // ]);

        // DB::table('users')->insertOrIgnore([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => '123456'
        // ]);

        // return DB::table('users')->insertGetId([
        //     'name' => 'ts2style',
        //     'email' => 'ts2style@gmail.com',
        //     'password' => '123456'
        // ]);

        // DB::table('users')->where('id', 6)->update(['name' => 'hoaipx']);

        // DB::table('users')->where('id', '=', 2)->delete();

        // return DB::table('users')->where('id', '=', 7)->get();
        // return DB::table('users')->get();

        /** Raw SQL Queries Raw SQL Queries Raw SQL Queries Raw SQL Queries Raw SQL Queries Raw SQL Queries Raw SQL Queries */
        /** Raw SQL Queries Raw SQL Queries Raw SQL Queries Raw SQL Queries Raw SQL Queries Raw SQL Queries Raw SQL Queries */
        /** Raw SQL Queries Raw SQL Queries Raw SQL Queries Raw SQL Queries Raw SQL Queries Raw SQL Queries Raw SQL Queries */
        // DB::insert('insert into users (name, email, password) values (?, ?, ?)', [
        //     'hoaipx', 'hoaipx@gmail.com', '123456'
        // ]);

        // return DB::select('select * from users');

        // DB::update('update users set name = ? where id = ?', [
        //     'admin', 1
        // ]);

        // DB::delete('delete from users where id = ?', [1]);

        return view('home');
    }

    public function innerJoinClause() {
        return DB::table('users')
                    ->join('posts', 'posts.user_id', '=', 'users.id')
                    ->select('users.id', 'users.email', 'posts.title')
                    ->get();
    }

    public function leftJoinClause() {
        return DB::table('users')
                    ->leftJoin('posts', 'posts.user_id', '=', 'users.id')
                    ->select('users.id', 'users.email', 'posts.title')
                    ->get();
    }

    public function rightJoinClause() {
        return DB::table('users')
                    ->rightJoin('posts', 'posts.user_id', '=', 'users.id')
                    ->select('users.id', 'users.email', 'posts.title')
                    ->get();
    }
}
