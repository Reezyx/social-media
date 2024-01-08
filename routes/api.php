<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    
    // Sudah bekerja
    Route::post('/createPost', [PostController::class, 'createPost'])->name('create_post');
    Route::get('/seePost/{post:id}', [PostController::class, 'seePost'])->name('see_post');
    Route::delete('/deletePost/{post:id}', [PostController::class, 'deletePost'])->name('delete_post');
    


    // belum di tes/belum bekerja



    Route::post('/updatePost/{id}', [PostController::class, 'updatePost'])->name('update_post');

    
});

Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/registrasi',[UserController::class,'registrasi'])->name('registrasi');

Route::get('/posts',[PostController::class,'index'])->name('posts');

// tahap ngetes

Route::post('/createComment', [CommentController::class, 'createComment'])->name('create_comment');
Route::delete('/deleteComment/{comment:id}', [CommentController::class, 'deleteComment'])->name('delete_comment');
