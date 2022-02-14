<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RecordController;
use App\Http\Controllers\Admin\ShopController;


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

Route::view('/', 'home');
Route::get('shop', [ShopController::class, 'index']);
Route::get('shop/{id}', [ShopController::class, 'show']);
Route::view('contact-us', 'contact');
Route::prefix('admin')->group(function () {
    Route::redirect('/', '/admin/records');
    Route::get('/records', [RecordController::class, 'index']);
});
