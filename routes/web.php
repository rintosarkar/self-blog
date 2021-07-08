<?php

    use  App\Models\Post;
    use  App\Models\Category;
    use  App\Models\User;
    use  Illuminate\Support\Facades\Route;
    use App\Http\Controllers\PostController;
    use App\Http\Controllers\RegisterController;
    use App\Http\Controllers\SessionController;
    use App\Http\Controllers\PostCommentController;



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

    Route::get('/', [PostController::class, 'index'])->name('home');


    Route::get('posts/{post:slug}', [PostController::class,'show']);
    Route::post('posts/{post:slug}/comments', [PostCommentController::class,'store']);

    Route::get('/register', [RegisterController::class,'create'])->middleware('guest');
    Route::post('/register', [RegisterController::class,'store'])->middleware('guest');
    Route::get('/login',  [SessionController::class,'create'])->middleware('guest');
    Route::post('/sessions',  [SessionController::class,'store'])->middleware('guest');
    Route::post('/logout',  [SessionController::class,'destroy'])->middleware('auth');






