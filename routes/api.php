<?php


use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\Post_tagController;
use App\Http\Controllers\Video_tagController;

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


    Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function () {     
        
        Route::apiResource('logout',UserController::class);
        Route::apiResource('register',UserController::class);
        Route::apiResource('login',UserController::class);
        Route::apiResource('tags',TagController::class);
        Route::apiResource('posts',PostController::class);
        Route::apiResource('videos',VideoController::class);
        Route::apiResource('post_tags',Post_tagController::class);
        Route::apiResource('video_tags',Video_tagController::class);
        Route::apiResource('vista_video_tags',Video_tagController::class);
        Route::apiResource('vista_tags',TagController::class);
        Route::apiResource('vista_post_tags',Post_tagController::class);
        Route::apiResource('vista_video',VideoController::class);
        Route::apiResource('vista_post',PostController::class);
        Route::apiResource('vista_user',UserController::class);
        
        
        
    });

