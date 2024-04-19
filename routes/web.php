<?php

use App\Livewire\BlogDetail;
use App\Livewire\Contact;
use App\Livewire\DocDetail;
use App\Livewire\InstitutionalStructure;
use App\Livewire\ManagerProfile;
use App\Livewire\OtherDetail;
use App\Livewire\PrakasDetail;
use App\Livewire\SearchBlog;
use App\Livewire\SearchBox;
use App\Livewire\SearchOther;
use App\Livewire\SearchPrakas;
use App\Livewire\ShowBlog;
use App\Livewire\ShowDocument;
use Illuminate\Support\Facades\Route;
use App\Livewire\ShowHome;
use App\Livewire\ShowOther;
use App\Livewire\ShowPrakas;

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

Route::get('/institutional-structure',InstitutionalStructure::class)->name('institutional-structure');
Route::get('/manager-profile',ManagerProfile::class)->name('manager-profile');
Route::get('/contact',Contact::class)->name('contact');


Route::get('/news',ShowBlog::class)->name('newsPage');
Route::get('/news/search',SearchBlog::class)->name('searchBlog');
Route::get('/news/{id}',BlogDetail::class)->name('newsDetail');

Route::get('/docs',ShowDocument::class)->name('docsPage');
Route::get('/docs/search',SearchBox::class)->name('searchDoc');
Route::get('/docs/{id}',DocDetail::class)->name('docsDetail');

Route::get('/prakas',ShowPrakas::class)->name('prakasPage');
Route::get('/prakas/search',SearchPrakas::class)->name('searchPrakas');
Route::get('/prakas/{id}',PrakasDetail::class)->name('prakasDetail');

Route::get('/others',ShowOther::class)->name('otherPage');
Route::get('/others/search',SearchOther::class)->name('searchOther');
Route::get('/others/{id}',OtherDetail::class)->name('otherDetail');
