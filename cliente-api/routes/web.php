<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatosController;
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


Route::get('/datos',[DatosController::class,"Listar"]);
Route::get('/login', function () {
    return view('login');
});
Route::post('/login',[DatosController::class,'Login']);
Route::get('/logout',[DatosController::class,'Logout']);
