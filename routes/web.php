<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Restu Alam",
        "email"=> "restualam41@gmail.com",
        "title" => "About"
    ]);
});


Route::get('/blog', [PostController::class, 'index']);

Route::get('posts/{slug}', [PostController::class, 'show']);


