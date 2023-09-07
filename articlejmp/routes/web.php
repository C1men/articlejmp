<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArtikelController;
use App\Models\article;

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

Route::get('/', function () {
    $articles = article::orderBy('id', 'DESC')->limit(3)->get();
    return view('welcome', compact('articles'));
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/HDPE', function () {
    return view('HDPE');
})->name('HDPE');

Route::get('/PP', function () {
    return view('PP');
})->name('PP');

Route::get('/PET', function () {
    return view('PET');
})->name('PET');



Route::resource('kategori', KategoriController::class);



Route::resource('article', ArtikelController::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::resource('artikel', ArticleController::class);
});
