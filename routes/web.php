<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserMiddleware;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\VendorMiddleware;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WishlistController;
use App\Http\Middleware\RedirectToDashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderItemController;
use App\Http\Middleware\RedirectToEditProfile;


Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', RedirectToDashboard::class])->name('dashboard');

Route::get('/partners', function () {
    return view('partners');
})->name('partners');

Route::get('/about-us', function () {
    return view('about');
})->name('about-us');

Route::get('/setprofile', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', RedirectToEditProfile::class])->name('setprofile');

Route::middleware('auth', 'verified')->group(function () {

    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');

    Route::name('admin.')->prefix('admin')->group(function () {
        Route::middleware([AdminMiddleware::class])->group(function () {
            Route::name('dashboard.')->prefix('dashboard')->group(function () {
                Route::get('', [DashboardController::class, 'adminDashboard'])->name('dashboard');
            });
        });
    });

    Route::name('vendor.')->prefix('vendor')->group(function () {
        Route::middleware([VendorMiddleware::class])->group(function () {
            Route::name('dashboard.')->prefix('dashboard')->group(function () {
                Route::get('', [DashboardController::class, 'vendorDashboard'])->name('dashboard');
                Route::get('editprofile', [DashboardController::class, 'editVendorProfile'])->name('editprofile');
                Route::post('updateprofile/{id}', [DashboardController::class, 'updateVendorProfile'])->name('updateprofile');

                Route::name('category.')->prefix('category')->group(function () {
                    Route::get('', [CategoryController::class, 'index'])->name('index');
                    Route::get('create', [CategoryController::class, 'create'])->name('create');
                    Route::post('store', [CategoryController::class, 'store'])->name('store');
                    Route::get('show/{id}', [CategoryController::class, 'show'])->name('show');
                    Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('edit');
                    Route::post('update/{id}', [CategoryController::class, 'update'])->name('update');
                    Route::get('{id}', [CategoryController::class, 'destroy'])->name('destroy');
                });

                Route::name('food.')->prefix('food')->group(function () {
                    Route::get('', [ProductController::class, 'index'])->name('index');
                    Route::get('create', [ProductController::class, 'create'])->name('create');
                    Route::post('store', [ProductController::class, 'store'])->name('store');
                    Route::get('show/{id}', [ProductController::class, 'show'])->name('show');
                    Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');
                    Route::post('update/{id}', [ProductController::class, 'update'])->name('update');
                    Route::get('{id}', [ProductController::class, 'destroy'])->name('destroy');
                });

                Route::name('order.')->prefix('order')->group(function () {
                    Route::get('', [OrderController::class, 'indexVendor'])->name('index');
                });

                Route::name('orderitem.')->prefix('orderitem')->group(function () {
                    Route::get('', [OrderItemController::class, 'indexVendor'])->name('index');
                });
            });
        });
    });

    Route::name('user.')->prefix('user')->group(function () {
        Route::middleware([UserMiddleware::class])->group(function () {
            Route::name('dashboard.')->prefix('dashboard')->group(function () {
                Route::get('', [DashboardController::class, 'userDashboard'])->name('dashboard');
                Route::get('editprofile', [DashboardController::class, 'editUserProfile'])->name('editprofile');
                Route::post('updateprofile/{id}', [DashboardController::class, 'updateUserProfile'])->name('updateprofile');
                Route::name('food.')->prefix('food')->group(function () {
                    Route::get('', [ProductController::class, 'allFood'])->name('index');
                    Route::get('show/{id}', [ProductController::class, 'details'])->name('details');
                    Route::get('search', [ProductController::class, 'search'])->name('search');
                });
                Route::name('cart.')->prefix('cart')->group(function () {
                    Route::get('index', [CartItemController::class, 'index'])->name('index');
                    Route::get('confirm', [CartItemController::class, 'confirm'])->name('confirm');
                    Route::post('store', [CartItemController::class, 'store'])->name('store');
                    Route::get('{id}', [CartItemController::class, 'destroy'])->name('destroy');
                    Route::get('increase/{id}', [CartItemController::class, 'increase'])->name('increase');
                    Route::get('decrease/{id}', [CartItemController::class, 'decrease'])->name('decrease');
                });

                Route::name('wishlist.')->prefix('wishlist')->group(function () {
                    Route::get('index', [WishlistController::class, 'index'])->name('index');
                    Route::post('store', [WishlistController::class, 'store'])->name('store');
                    Route::get('{id}', [WishlistController::class, 'destroy'])->name('destroy');
                });

                Route::name('order.')->prefix('order')->group(function () {
                    Route::get('index', [OrderController::class, 'index'])->name('index');
                    Route::post('store', [OrderController::class, 'store'])->name('store');
                    Route::get('{id}', [OrderController::class, 'destroy'])->name('destroy');
                });
            });
        });
    });
});

require __DIR__ . '/auth.php';
