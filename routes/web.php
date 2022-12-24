<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\MailinglistController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

/*-----Website Routs-----*/ 
Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/article/{id}', [WebsiteController::class, 'showpost'])->name('showpost');
Route::get('/category/{id}', [WebsiteController::class, 'showcategory'])->name('showcategory');
Route::get('/search', [WebsiteController::class, 'search'])->name('websitesearch');
Route::post('/mailinglist', [MailinglistController::class, 'store'])->name('storemailinglist');
Route::post('/comment/{id}', [CommentController::class, 'store'])->name('comment');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::post('/sendmail', [WebsiteController::class, 'sendmail'])->name('sendmail');

/*-----Dashboard Routs-----*/ 
Route::group(['prefix' => 'dashboard','middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    /*-----Categories Routs-----*/ 
    Route::get('categories/add', [CategoriesController::class, 'create'])->name('addcategory');
    Route::post('categories/store', [CategoriesController::class, 'store'])->name('storecategory');
    Route::get('categories', [CategoriesController::class, 'index'])->name('showcategories');
    Route::delete('categories/delete/{id}', [CategoriesController::class, 'destroy'])->name('deletecategory');
    Route::get('categories/edit/{id}', [CategoriesController::class, 'edit'])->name('editcategory');
    Route::post('categories/update/{id}', [CategoriesController::class, 'update'])->name('updatecategory');
    /*-----Posts Routs-----*/ 
    Route::get('posts/add', [PostController::class, 'create'])->name('addpost');
    Route::post('posts/store', [PostController::class, 'store'])->name('storepost');
    Route::get('posts', [PostController::class, 'index'])->name('showposts');
    Route::delete('posts/delete/{id}', [PostController::class, 'destroy'])->name('deletepost');
    Route::get('posts/edit/{id}', [PostController::class, 'edit'])->name('editpost');
    Route::post('posts/update/{id}', [PostController::class, 'update'])->name('updatepost');
    Route::get('posts/search', [PostController::class, 'search'])->name('search');
    Route::get('setting', [SettingController::class, 'index'])->name('setting');
    Route::get('mailinglist', [MailinglistController::class, 'index'])->name('showmailinglist');
    Route::delete('mailingList/delete/{id}', [MailinglistController::class, 'destroy'])->name('deletemailingList');
    Route::post('setting/update', [SettingController::class, 'update'])->name('settingupdate');
    /*-----Comments Routs-----*/ 
    Route::get('comments', [CommentController::class, 'index'])->name('showcomments');
    Route::delete('comments/delete/{id}', [CommentController::class, 'destroy'])->name('deletecomment');
    Route::post('comments/approve/{id}', [CommentController::class, 'approve'])->name('approvecomment');

});

require __DIR__.'/auth.php';
