<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('frontend/index');
});

// frontend routes

Route::controller(FrontendController::class)->group(function () {
    Route::get('/index', 'home')->name("frontend.index");
    Route::get('/about', 'about')->name('frontend.About.about');
    Route::get('/contact', 'contact')->name('frontend.Contact.contact');
    Route::get('/blog', 'blog')->name('frontend.Blog.blog');
    Route::get('/blog-details', 'blogdetails')->name('frontend.Blog.blogDetails');
    Route::get('/services-details', 'services')->name('frontend.Services.services');
    Route::get('/portfolio', 'portfolio')->name('frontend.Portfolio.portfolio');
    Route::get('/portfolio-details', 'portfolioDetail')->name('frontend.Portfolio.portfolio');
});


Route::get('/dashboard', function () {
    return view('admin/index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin Routes
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'logout')->name("admin.logout");
    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/admin/edit_profile', 'EditProfile')->name('admin.edit.profile');
    Route::post('/store/profile', 'UpdatedEditProfile')->name('admin.update.editProfile');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/edit_profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
