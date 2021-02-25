<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Use the user controller
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Say hello world -> returns as json
Route::get('/', function () {
    return ['message' => 'Hello World'];
});

// Sends random number
Route::get('/give-random-number', function () {
    return rand();
});

// Using params returns a post
Route::get('/post/{id}', function ($id) {
    switch ($id) {
        case 0:
            return 'post 0';
            break;
        case 1: 
            return 'post 1';
            break;
        default:
            return 'no post with id of '.$id;
            break;
    }
});

// Grouped routes 
Route::prefix('/profile')->group(function () {
    // All profile data
    Route::get('/', UserController::class);

    // Optional pram 
    // profile/name/{sub_name: first | last (optional)}
    Route::get('/name/{sub_name?}', function ($sub_name = null) {
        $user = new UserController;
        
        [
            'firstName' => $first_name,
            'lastName' => $last_name
        ] = $user();

        if (is_null($sub_name)) {
            return $first_name.' '.$last_name;
        }

        switch($sub_name) {
            case('first'):
                return $first_name;
                break;
            case('last'): 
                return $last_name;
                break;
            default:
                return 'Unknown param';
                break;
        }
    });

    // Return bio
    Route::get('/bio', function () {
        $bio = 'Things about me';

        return [
            'bio' => $bio,
            'bioLength' => strlen($bio)
        ];
    });
});