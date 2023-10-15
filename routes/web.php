<?php

use App\Http\Controllers\MemoController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Index');
});

Route::get('/memo/show', [MemoController::class, 'memo']);
Route::get('/memo/search', [MemoController::class, 'searchMemo']);
Route::get('/memo/registerForm', function () {
    return Inertia::render('Memo');
});
Route::post('/memo/registerUpdate', [MemoController::class, 'memoUpdate']);


Route::get('/video/show', [VideoController::class, 'video']);
Route::get('/video/search', [VideoController::class, 'searchVideo']);
Route::post('/video/registerUpdate', [VideoController::class, 'videoUpdate']);
Route::get('/video/registerForm', function () {
    return Inertia::render('Video');
});


