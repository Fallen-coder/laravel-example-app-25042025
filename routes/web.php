<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App\Http\CommentController;
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', function () {
//     // return view('welcome');

// });

// Route::get('/test', function (){
//     echo "<h1>test</h1>";
//     $name = "Renārs";
//     echo $name;
// });
Route::get('/test', function (){
    return view('test', ['variable' => "my variable text value"]);
});

Route::get('/comment',[CommentController::class, 'index'] );









