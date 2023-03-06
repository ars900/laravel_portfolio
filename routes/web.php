<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\MultiImageController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Front\HomePageController;
use App\Http\Controllers\Front\AboutPageController;
use App\Http\Controllers\Front\PortfolioPageController;
use App\Http\Controllers\Front\BlogPageController;
use App\Http\Controllers\Front\ContactPageController;
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

Route::get('/', [HomePageController::class, 'index'])->name('home_page');



Route::middleware(['auth'])->group(function () {

    Route::group(['prefix'=>'admin'], function() {

        Route::resource('admin_user', AdminController::class)->except('show');

        Route::resource('about', AboutController::class)->only(['index', 'update']);

        Route::resource('multi_image', MultiImageController::class)->except(['show', 'update', 'edit']);

        Route::resource('home_slider', HomeSliderController::class)->only(['index', 'update']);

        Route::resource('portfolio', PortfolioController::class)->except('show');

        Route::resource('blog_category', BlogCategoryController::class)->except(['show', 'update', 'edit']);

        Route::resource('blog', BlogController::class)->except('show');

        Route::resource('footer', FooterController::class)->only(['index', 'update']);

        Route::resource('contact', ContactController::class)->except(['show', 'update', 'edit']);
    });

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::get('/admin/admin_home', function () {
        return view('admin.index');
    })->name('admin');

});


Route::resource('about_page', AboutPageController::class)->only('index');

Route::resource('portfolio_page', PortfolioPageController::class)->only('index');

Route::resource('blog_page', BlogPageController::class)->only('index');

Route::resource('contact_page', ContactPageController::class)->only('index');



require __DIR__.'/auth.php';




