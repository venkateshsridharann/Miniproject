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
    return view('pages.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/signin', function () {
    return view('pages.signin');
});
Route::get('/signup', function () {
    return view('pages.signup');
});
Route::get('/messages', function () {
    return view('pages.messages');
});
Route::get('/messagecard', function () {
    return view('pages.displaymessage');
});

Route::post('/contact', function () {
    $data = request() -> all();
    echo "Email: " . $data['email'] . '<br>';
    echo "Body: " . $data['body'] ;
});