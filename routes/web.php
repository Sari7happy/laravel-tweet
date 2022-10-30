<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TweetFormController;
use App\Http\Controllers\ImageTitleController;
use App\Http\Controllers\NiceController;
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
    return view('homelogin');
});
// 画像読み取り
Route::controller(ImageTitleController::class)->group(function () {
    Route::get('/dashboard' . 'index')->name('image.form');
    Route::post('/upload-image', 'store')->name('image.store');
});







Route::resource('tweets', TweetFormController::class);

Route::prefix('tweets')
    ->middleware(['auth'])
    ->controller(TweetFormController::class)
    ->group(function () {
        Route::get('/', 'index')->name('tweets.index');
        Route::get('/create', 'create')->name('tweets.create');
        Route::post('/', 'store')->name('tweets.store');
        Route::get('/{id}', 'show')->name('tweets.show');
        Route::get('/{id}/edit', 'edit')->name('tweets.edit');
        Route::post('/{id}', 'update')->name('tweets.update');
        Route::post('/{id}/destroy', 'destroy')->name('tweets.destroy');
    });



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
// いいね機能
Route::get('/{post}', [NiceController::class,'store']);
Route::get('/{post}', [NiceController::class,'destroy']);