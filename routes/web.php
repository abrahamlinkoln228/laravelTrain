<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IhorController;

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
    //return view('welcome');
    return "hello";
});

Route::get('/hello', function () {
    //return view('welcome');
    return "privet";
});

Route::get('/users', [IhorController::class, 'getUsers']);

Route::get('/add-users', [IhorController::class, 'addUser']);

Route::get('/edit-user/{id}', [IhorController::class, 'updateUser']);