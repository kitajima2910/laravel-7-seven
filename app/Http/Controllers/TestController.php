<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestController extends Controller
{
    public function index() {
        echo '<h1>Fluent Strings</h1>';
        
        /** https://laravel.com/docs/7.x/helpers */

        $string = Str::of('Welcome to my Laravel 7')->after('Welcome to');
        echo $string . '<br>';
        $string = Str::of('Illuminate\Support\Str')->afterLast('\\');
        echo $string . '<br>';
        $string = Str::of('Laravel 7.x')->append(' - HoaiPX');
        echo $string . '<br>';
        $string = Str::of('ü')->ascii();
        echo $string . '<br>';
        $string = Str::of('/foo/bar/baz.jpg')->basename('/');
        echo $string . '<br>';
        $string = Str::of('/foo/bar/baz.jpg')->basename('.jpg');
        echo $string . '<br>';
        $converted = Str::of('foo_bar')->camel();
        echo $converted . '<br>';
        $contains = Str::of('This is my name')->contains(['my', 'foo']);
        echo $contains . '<br>';
        $containsAll = Str::of('This is my name')->containsAll(['my', 'name']);
        echo $containsAll . '<br>';
        $collection = Str::of('foo bar baz')->explode(' ');
        echo $collection . '<br>';
        $truncated = Str::of('The quick brown fox jumps over the lazy dog')->limit(20);
        echo $truncated . '<br>';
        $truncated = Str::of('The quick brown fox jumps over the lazy dog')->limit(20, '???');
        echo $truncated . '<br>';


    }
}
