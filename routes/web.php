<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('login');
// });
// Route::get('/login',[UserController::class,'index']);
// Route::post('/login',[UserController::class,'authenticate']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/',[UserController::class,'formLogin'])->name('/');
Route::get('/home',[PostController::class,'index'])->name('home');
Route::get('/formLogin',[UserController::class,'formLogin'])->name('formLogin');
Route::get('/formRegistrasi',[UserController::class,'formRegistrasi'])->name('formRegistrasi');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::post('/registrasi',[UserController::class,'registrasi'])->name('registrasi');
