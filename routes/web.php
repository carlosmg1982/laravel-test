<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to the mall',
    ];
    //return view('welcome',['tasks'=>$tasks,'foo'=>request('foo')]);
    //return view('welcome')->withTasks($tasks)->withFoo(request('foo'));
    return view('welcome')->with(['tasks'=>$tasks,'foo'=>request('foo')]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
