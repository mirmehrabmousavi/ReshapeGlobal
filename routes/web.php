<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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

Route::group(['as' => 'front.','middleware' => 'language'], function () {
    Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');
    Route::get('/services', [\App\Http\Controllers\IndexController::class, 'services'])->name('services');
    Route::get('/services/estate', [\App\Http\Controllers\IndexController::class, 'estate'])->name('estate');
    Route::get('/services/estate/{title}', [\App\Http\Controllers\IndexController::class, 'showEstate'])->name('estate.show');
    Route::get('/services/brandRegistration', [\App\Http\Controllers\IndexController::class, 'brandRegistration'])->name('brandRegistration');
    Route::get('/services/companyRegistration', [\App\Http\Controllers\IndexController::class, 'companyRegistration'])->name('companyRegistration');
    Route::get('/services/turkishCitizenship', [\App\Http\Controllers\IndexController::class, 'turkishCitizenship'])->name('turkishCitizenship');
    Route::get('/services/legalConsultancy', [\App\Http\Controllers\IndexController::class, 'legalConsultancy'])->name('legalConsultancy');
    Route::get('/services/importExport', [\App\Http\Controllers\IndexController::class, 'importExport'])->name('importExport');
    Route::get('/services/ads', [\App\Http\Controllers\IndexController::class, 'ads'])->name('ads');
    Route::get('/counseling', [\App\Http\Controllers\IndexController::class, 'counseling'])->name('counseling');
    Route::get('/counseling/commercial', [\App\Http\Controllers\IndexController::class, 'commercial'])->name('commercial');
    Route::get('/counseling/legal', [\App\Http\Controllers\IndexController::class, 'legal'])->name('legal');
    Route::get('/counseling/counselingAds', [\App\Http\Controllers\IndexController::class, 'counselingAds'])->name('counselingAds');
    Route::get('/counseling/estateCounseling', [\App\Http\Controllers\IndexController::class, 'estateCounseling'])->name('estateCounseling');
    Route::get('/events', [\App\Http\Controllers\IndexController::class, 'events'])->name('events');
    Route::get('/environment', [\App\Http\Controllers\IndexController::class, 'environment'])->name('environment');
    Route::get('/blogs', [\App\Http\Controllers\IndexController::class, 'blog'])->name('blogs');
    Route::get('/blogs/{id}/{title}', [\App\Http\Controllers\IndexController::class, 'showBlog'])->name('blog.show');
    Route::post('/comments/store', [\App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');
    Route::get('/about', [\App\Http\Controllers\IndexController::class, 'about'])->name('about');
    Route::get('/team', [\App\Http\Controllers\IndexController::class, 'team'])->name('team');
    Route::get('/contact', [\App\Http\Controllers\IndexController::class, 'contact'])->name('contact');
    //ChangeLang
    Route::get('change-language/{lang}',[\App\Http\Controllers\IndexController::class, 'changeLang'])->name('changeLang');
//    Route::get('locale/{locale}', function ($locale) {
//        $validLocale = in_array($locale, ['en','fa']);
//        if ($validLocale) {
//            App::setLocale($locale);
//        }
//        return back();
//    });
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', ['middleware' => 'auth']], function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.index');
    //Estate
    Route::get('estate', [\App\Http\Controllers\Admin\EstateController::class, 'indexEstate'])->name('admin.indexEstate');
    Route::get('estate/create', [\App\Http\Controllers\Admin\EstateController::class, 'createEstate'])->name('admin.createEstate');
    Route::post('estate/create', [\App\Http\Controllers\Admin\EstateController::class, 'storeEstate'])->name('admin.storeEstate');
    Route::get('estate/edit/{id}', [\App\Http\Controllers\Admin\EstateController::class, 'editEstate'])->name('admin.editEstate');
    Route::patch('estate/edit/{id}', [\App\Http\Controllers\Admin\EstateController::class, 'updateEstate'])->name('admin.updateEstate');
    Route::delete('estate/delete/{id}', [\App\Http\Controllers\Admin\EstateController::class, 'deleteEstate'])->name('admin.deleteEstate');
    //Blog
    Route::get('blogs', [\App\Http\Controllers\Admin\BlogController::class, 'indexBlog'])->name('admin.indexBlog');
    Route::get('blogs/create', [\App\Http\Controllers\Admin\BlogController::class, 'createBlog'])->name('admin.createBlog');
    Route::post('blogs/create', [\App\Http\Controllers\Admin\BlogController::class, 'storeBlog'])->name('admin.storeBlog');
    Route::get('blogs/edit/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'editBlog'])->name('admin.editBlog');
    Route::patch('blogs/edit/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'updateBlog'])->name('admin.updateBlog');
    Route::delete('blogs/delete/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'deleteBlog'])->name('admin.deleteBlog');
});
