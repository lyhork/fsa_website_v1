<?php

use App\Livewire\AboutFsa;
use App\Livewire\BlogDetail;
use App\Livewire\DocDetail;
use App\Livewire\OtherDetail;
use App\Livewire\PrakasDetail;
use App\Livewire\PressDetail;
use App\Livewire\SearchBlog;
use App\Livewire\SearchBox;
use App\Livewire\SearchOther;
use App\Livewire\SearchPrakas;
use App\Livewire\SearchPress;
use App\Livewire\ShowBlog;
use App\Livewire\ShowContact;
use App\Livewire\ShowDocument;
use Illuminate\Support\Facades\Route;
use App\Livewire\ShowHome;
use App\Livewire\ShowInstitutionalStructure;
use App\Livewire\ShowManagerProfile;
use App\Livewire\ShowOther;
use App\Livewire\ShowPrakas;
use App\Livewire\ShowPressRelease;

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

Route::get('/test', function () {
    return dd(phpinfo());
});
// Route::get('/',function() {
//     return app()->getLocale();
// });
Route::get('/',ShowHome::class)->name('home');

Route::get('/institutional-structure',ShowInstitutionalStructure::class)->name('institutional-structure');
Route::get('/manager-profile',ShowManagerProfile::class)->name('manager-profile');
Route::get('/contact',ShowContact::class)->name('contact');
Route::get('/about',AboutFsa::class)->name('about-fsa');


Route::get('/news',ShowBlog::class)->name('newsPage');
Route::get('/news/search',SearchBlog::class)->name('searchBlog');
Route::get('/news/{id}',BlogDetail::class)->name('newsDetail');

Route::get('/docs',ShowDocument::class)->name('docsPage');
Route::get('/docs/search',SearchBox::class)->name('searchDoc');
Route::get('/docs/{id}',DocDetail::class)->name('docsDetail');

Route::get('/press-release',ShowPressRelease::class)->name('pressRelease');
Route::get('/press-release/search',SearchPress::class)->name('searchPress');
Route::get('/press-release/{id}',PressDetail::class)->name('pressDetail');

Route::get('/prakas',ShowPrakas::class)->name('prakasPage');
Route::get('/prakas/search',SearchPrakas::class)->name('searchPrakas');
Route::get('/prakas/{id}',PrakasDetail::class)->name('prakasDetail');

Route::get('/others',ShowOther::class)->name('otherPage');
Route::get('/others/search',SearchOther::class)->name('searchOther');
Route::get('/others/{id}',OtherDetail::class)->name('otherDetail');
