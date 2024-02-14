<?php

use App\Livewire\BlogDetail;
use App\Livewire\ShowBlog;
use Illuminate\Support\Facades\Route;
use App\Livewire\ShowHome;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/',function() {
//     return app()->getLocale();
// });
Route::get('/',ShowHome::class)->name('home');
Route::get('/news',ShowBlog::class)->name('newsPage');
Route::get('/news/{id}',BlogDetail::class)->name('newsDetail');

