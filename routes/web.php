<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'getHome']);
Route::get('/about', [PageController::class, 'getAbout']);
Route::get('/contact', [PageController::class, 'getContact']);

Route::get('/admin/messages',[MessageController::class, 'getMessages']);

Route::post('/contact/submit',[MessageController::class, 'submit']);
