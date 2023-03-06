<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('product') -> group(function() {
    Route::get('/', [ProductsController::class, 'product']);
    Route::get('/web-developer', [ProductsController::class, 'webDev']);
    Route::get('/app-developer', [ProductsController::class, 'appDev']);
    
    
});

Route::get('/news/{berita?}', [NewsController::class,'news']);

Route::prefix('program') -> group(function() {
    
    Route::get('/', [ProgramController::class, 'program']);
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjungan']); 
});

Route::get('/about-us', [AboutUsController::class, 'aboutUs'])->name('about-us');
Route::resource('/contact-us', ContactController::class) -> only([
    'index', 'store'
]);