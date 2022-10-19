<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TweetFormController;

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

Route::get('posts/post',[PostController::class,'index']);

Route::resource('tweets',TweetFormController::class);

Route::prefix('tweets')
->middleware(['auth'])
->controller(TweetFormController::class)
->group(function(){
    Route::get('/','index')->name('tweets.index');
    Route::get('/create','create')->name('tweets.create');
    Route::post('/','store')->name('tweets.store');

});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
