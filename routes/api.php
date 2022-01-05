<?php

use App\Http\Controllers\PostController;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//post
//CRUD is basically
//1.get all(GET) api/posts
//2.create post (POST) api/posts
//3.get a single(GET) api/posts/{id}
//4.update single(PUT/PATCH) api/posts/{id}
//5.delete(DELETE) api/post/{id}


//to create resource(posts) in laravel

//1.create database and migration
//2.create model
//2.5 create a service Eloquent ORM
//3.create a controller to go get into from the database
//4.return that info


Route::resource('post',PostController::class);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
