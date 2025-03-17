<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StarterController;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\CSRFController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\BladeTemplateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ContactController as AdminContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Middleware\FirstMiddleware;
use App\Http\Middleware\LocaleMiddleware;
use App\Http\Middleware\AdminAuthMiddleware;
use App\Http\Controllers\web\ContactController;

Route::get('/', function() {
    return view('app.index');
});

Route::get('/', [AppController::class, 'index']);// Contact
Route::resource('contacts', ContactController::class)->only(['store']);


// Change Language
Route::middleware([LocaleMiddleware::class])->group(function () {

    Route::prefix('admin')->group(function() {

        Route::get('/', function () {
            // return view('admin.layouts.app');
            return view('admin.auth.login');
        });

        // Login
        Route::post('/login', [AdminAuthController::class, 'login'])->name('login');
        Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');

        // Google OAuth
        Route::get('auth/google', [AdminAuthController::class, 'redirectToGoogle'])->name('auth.google');
        Route::get('auth/google/callback', [AdminAuthController::class, 'handleGoogleCallback']);
        
        Route::middleware([AdminAuthMiddleware::class])->group(function () {
            // Starter
            Route::get('/page1', [StarterController::class, 'getPage1']);
            Route::get('/page2', [StarterController::class, 'getPage2']);
            Route::get('/page3', [StarterController::class, 'getPage3']);
            
            // Routing
            Route::get('/routing/view-only', [RoutingController::class, 'viewOnly']);
            Route::get('/routing/pass-data-to-view', [RoutingController::class, 'passDataToView']);
            Route::get('/routing/route-para/{bgColor}/{color}', [RoutingController::class, 'routePara']);
            Route::post('/routing/dynamic-route-para', [RoutingController::class, 'dynamicRoutePara']);
            
            // CSRF
            Route::get('/csrf/lecture', [CSRFController::class, 'lecture'])->name('admin.lecture');
            Route::post('/csrf/info', [CSRFController::class, 'getInfo'])
                ->name('getInfo')
                ->middleware(FirstMiddleware::class);
            
            Route::get('/csrf/ajax', [CSRFController::class, 'ajax'])->name('admin.ajax');
            Route::post('/csrf/get-items', [CSRFController::class, 'getItems'])->name('getItem');
            
            // Session
            Route::get('/session/get-session', [SessionController::class, 'getSession'])->name('admin.getSession');
            Route::post('/session/post-session', [SessionController::class, 'postSession'])->name('admin.postSession');
            Route::post('/session/delete-session/{key}', [SessionController::class, 'deleteSession'])->name('admin.deleteSession');
            Route::post('/session/flush-session', [SessionController::class, 'flushSession'])->name('admin.flushSession');
            
            // Blade Template
            Route::get('/blade-template/component', [BladeTemplateController::class, 'getComponent'])->name('admin.component');
            Route::get('/blade-template/localization', [BladeTemplateController::class, 'getLocalization'])->name('admin.localization');
            Route::post('/blade-template/change-localization', [BladeTemplateController::class, 'changeLocalization'])->name('admin.changeLocalization');

            // User
            Route::resource('users', UserController::class);

            // Portfolio
            Route::resource('portfolios', PortfolioController::class);

            // Contact
            Route::resource('contacts', AdminContactController::class)->only(['index', 'destroy']);

            // Services
            Route::resource('services', ServiceController::class);
        });
    });
    
});


