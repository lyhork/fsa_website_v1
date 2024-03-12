<?php

use App\Livewire\BlogDetail;
use App\Livewire\DocDetail;
use App\Livewire\SearchBlog;
use App\Livewire\SearchBox;
use App\Livewire\ShowBlog;
use App\Livewire\ShowDocument;
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

// Route::get('/test', function () {
//     return dd(phpinfo());
// });
// Route::get('/',function() {
//     return app()->getLocale();
// });
Route::get('/',ShowHome::class)->name('home');

Route::get('/news',ShowBlog::class)->name('newsPage');
Route::get('/news/search',SearchBlog::class)->name('searchBlog');
Route::get('/news/{id}',BlogDetail::class)->name('newsDetail');

Route::get('/docs',ShowDocument::class)->name('docsPage');
Route::get('/docs/search',SearchBox::class)->name('searchDoc');
Route::get('/docs/{id}',DocDetail::class)->name('docsDetail');



