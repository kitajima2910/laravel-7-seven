@extends('layouts.master')
@section('title', 'SEVEN | UPLOAD FILE')
@section('content')
<p>{{ __('message.welcome') }}</p>
<p>{{ __('message.language') }}</p>
<form action="{{ route('HoaiPXFile') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-file">
        <input type="file" name="file">
        <x-button type="submit" content="Upload file" style="primary mt-3"></x-button>
    </div>
</form>
@endsection
