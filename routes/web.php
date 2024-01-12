<?php

use App\Http\Controllers\AuthController;

use App\Http\Controllers\CommentController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Bookmark;
use App\Models\Comment;
use App\Models\Follow;
use App\Models\Post;
use App\Models\User;
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
Route::get('/', [UserController::class, 'formLogin'])->name('/');
Route::get('/home', [PostController::class, 'index'])->name('home');
Route::get('/formLogin', [UserController::class, 'formLogin'])->name('formLogin');
Route::get('/formRegistrasi', [UserController::class, 'formRegistrasi'])->name('formRegistrasi');
Route::post('/login', [UserController::class, 'userLogin'])->name('login');
Route::post('/registrasi', [UserController::class, 'registrasi'])->name('registrasi');



Route::group(['middleware' => 'auth'], function () {

    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

    Route::get('/seePost/{post:id}', [PostController::class, 'seePost'])->name('seePost');
    Route::post('/sendComment', [CommentController::class, 'sendComment'])->name('sendComment');
    Route::post('/sendReply', [CommentController::class, 'sendReply'])->name('sendReply');
    Route::delete('/deletePost/{post}', [PostController::class, 'deletePost'])->name('deletePost');
    Route::get('/formCreatePost', [PostController::class, 'formCreatePost'])->name('formCreatePost');
    Route::post('/createPost', [PostController::class, 'createPost'])->name('createPost');


    Route::delete('/deletePost/{post}', [PostController::class, 'deletePost'])->name('deletePost');
    Route::delete('/deleteComment/{post}/{comment}', [CommentController::class, 'deleteComment'])->name('deleteComment');
    Route::delete('/deleteReply/{post}/{comment}', [CommentController::class, 'deleteReply'])->name('deleteReply');


    Route::post('/likePost/{post}', [PostController::class, 'likePost'])->name('likePost');
    Route::post('/likeComment/{comment}', [CommentController::class, 'likeComment'])->name('likeComment');

    Route::post('/addBookmark/{post}', [PostController::class, 'addBookmark'])->name('addBookmark');

    Route::get('/seeBookmark', [PostController::class, 'seeBookmark'])->name('seeBookmark');

    Route::get('seePeople/{user}', [UserController::class, 'seePeople'])->name('seePeople');

    Route::post('follow/{people}', [FollowController::class, 'followPeople'])->name('follow');
    Route::get('seeFollower/{user}', [FollowController::class, 'seeFollower'])->name('seeFollower');
    Route::get('seeFollowing/{user}', [FollowController::class, 'seeFollowing'])->name('seeFollowing');
});
