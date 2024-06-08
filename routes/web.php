<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminMessageController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminAnnouncementController;
use App\Http\Controllers\User\UserMessageController;
use App\Http\Controllers\User\UserAnnouncementController;
use App\Http\Controllers\User\UserProductController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('auth.login');
});

// Authentication Routes
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    
    Route::resource('users', AdminUserController::class);
    
    Route::resource('messages', AdminMessageController::class)->except(['show']);
    Route::get('messages/inbox', [AdminMessageController::class, 'inbox'])->name('messages.inbox');
    Route::get('messages/outbox', [AdminMessageController::class, 'outbox'])->name('messages.outbox');
    Route::get('messages/view/{message}', [AdminMessageController::class, 'view'])->name('messages.view');
    Route::get('messages/{message}/reply', [AdminMessageController::class, 'reply'])->name('messages.reply');
    Route::post('messages/{message}/markAsRead', [AdminMessageController::class, 'markAsRead'])->name('messages.markAsRead');

    Route::resource('products', AdminProductController::class);
    Route::resource('announcements', AdminAnnouncementController::class);
});


// User Routes
Route::middleware(['auth', 'user'])->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');

    Route::get('/announcements', [UserAnnouncementController::class, 'index'])->name('announcements.index');

    Route::get('/products', [UserProductController::class, 'index'])->name('products.index');
    Route::get('/products/search', [UserProductController::class, 'search'])->name('products.search');

    Route::get('/messages/inbox', [UserMessageController::class, 'inbox'])->name('messages.inbox');
    Route::get('messages/view/{message}', [UserMessageController::class, 'view'])->name('messages.view');
    Route::get('/messages/sent', [UserMessageController::class, 'sent'])->name('messages.sent');
    Route::get('/messages/compose', [UserMessageController::class, 'create'])->name('messages.compose');
    Route::post('/messages', [UserMessageController::class, 'store'])->name('messages.store');
    Route::get('/messages/{message}/edit', [UserMessageController::class, 'edit'])->name('messages.edit');
    Route::put('/messages/{message}', [UserMessageController::class, 'update'])->name('messages.update');
    
    Route::get('/profile', [UserProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [UserProfileController::class, 'update'])->name('profile.update');
});

