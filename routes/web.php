<?php

use App\Models\Cart;
use App\Models\Product;
use App\Models\CartItem;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserMiddleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\VendorMiddleware;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WishlistController;
use App\Http\Middleware\RedirectToDashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderItemController;
use App\Http\Middleware\RedirectToEditProfile;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', RedirectToDashboard::class])->name('dashboard');

Route::get('/', function () {
    if (Auth::user()) {
        $user = Auth::user();
        $wishlists = Wishlist::all()->where('user_id', $user->id);
        $carts = Cart::all()->where('user_id', $user->id);
        foreach ($carts as $cart)
            $id = $cart->id;
        $cartitems = CartItem::all()->where('cart_id', $id);
        return view('welcome', compact('carts', 'cartitems', 'wishlists'));
    } else {
        return view('welcome');
    }
})->name('homepage');

Route::get('/partners', function () {
    if (Auth::user()) {
        $user = Auth::user();
        $wishlists = Wishlist::all()->where('user_id', $user->id);
        $carts = Cart::all()->where('user_id', $user->id);
        foreach ($carts as $cart)
            $id = $cart->id;
        $cartitems = CartItem::all()->where('cart_id', $id);
        return view('partners', compact('carts', 'cartitems', 'wishlists'));
    } else {
        return view('partners');
    }
})->name('partners');

Route::get('/about-us', function () {
    if (Auth::user()) {
        $user = Auth::user();
        $wishlists = Wishlist::all()->where('user_id', $user->id);
        $carts = Cart::all()->where('user_id', $user->id);
        foreach ($carts as $cart)
            $id = $cart->id;
        $cartitems = CartItem::all()->where('cart_id', $id);
        return view('about', compact('carts', 'cartitems', 'wishlists'));
    } else {
        return view('about');
    }
})->name('about');

Route::get('/contact-us', function () {
    if (Auth::user()) {
        $user = Auth::user();
        $wishlists = Wishlist::all()->where('user_id', $user->id);
        $carts = Cart::all()->where('user_id', $user->id);
        foreach ($carts as $cart)
            $id = $cart->id;
        $cartitems = CartItem::all()->where('cart_id', $id);
        return view('contact', compact('carts', 'cartitems', 'wishlists'));
    } else {
        return view('contact');
    }
})->name('contact');

Route::get('/shop', function () {
    if (Auth::user()) {
        $user = Auth::user();
        $products = Product::paginate(8);
        $wishlists = Wishlist::all()->where('user_id', $user->id);
        $carts = Cart::all()->where('user_id', $user->id);
        foreach ($carts as $cart)
            $id = $cart->id;
        $cartitems = CartItem::all()->where('cart_id', $id);
        return view('shop', compact('carts', 'cartitems', 'wishlists', 'products'));
    } else {
        $products = Product::paginate(8);
        return view('shop', compact('products'));
    }
})->name('shop');

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

                Route::name('product.')->prefix('product')->group(function () {
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
                Route::name('product.')->prefix('product')->group(function () {
                    Route::get('', [ProductController::class, 'allProduct'])->name('index');
                    Route::get('show/{id}', [ProductController::class, 'show'])->name('show');
                    Route::get('search', [ProductController::class, 'search'])->name('search');
                    Route::get('details/{id}', [ProductController::class, 'details'])->name('details');
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
