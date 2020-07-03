@extends('layouts.master', ['title' => 'SEVEN | Home Page'])
@section('title', 'SEVEN | Home Page')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->withPath('/home/HoaiPX')->links() }}
@endsection