<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/my-page', function () {
    return view('myPage')
        ->with('user', [
            'name' => 'Fletcher Rippon',
            'username' => 'Fletcherrippon123',
            'email' => 'email@gmail.com'
        ]);
});
