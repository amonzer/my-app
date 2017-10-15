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
    $page_name = 'Home Page';
    return view('welcome', compact('page_name'));
});

Route::get('aboutus', function () {
    $page_name = 'About Us';
    return view('about', compact('page_name'));
});

Route::get('with', function () {
    return view('with')->with('name', 'world');
});

Route::get('tasks', function () {
    $page_name = 'Tasks';
    return view('tasks', [
        'page_name' => $page_name,
        'task1' => 'action 1',
        'task2' => 'action 2',
        'task3' => 'action 3',
        'task4' => 'action 4'
    ]);
});
