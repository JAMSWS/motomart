<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });




// Landing Page
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);

// Auth routes with email verification
Auth::routes(['verify' => true]);

// Home page route
Route::get('/email/verify', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Collections
Route::get('/collections', [App\Http\Controllers\Frontend\FrontendController::class, 'categories']);
// Route::get('/collections/{category_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'products']);
Route::get('/collections/{category_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'products']);
Route::get('/collections/{category_slug}/{product_name}', [App\Http\Controllers\Frontend\FrontendController::class, 'productsView']);

//wishlist
Route::middleware(['auth'])->group(function () {
    Route::get('wishlist',[App\Http\Controllers\Frontend\WishlistController::class, 'index' ]);
    Route::get('cart',[App\Http\Controllers\Frontend\CartController::class, 'index' ]);
    Route::get('checkout',[App\Http\Controllers\Frontend\CheckoutController::class, 'index' ]);
    Route::get('/orders',[App\Http\Controllers\Frontend\OrderController::class, 'index']);
    Route::get('/orders/{orderId}',[App\Http\Controllers\Frontend\OrderController::class, 'show']);

});

Route::get('thank-you', [App\Http\Controllers\Frontend\FrontendController::class, 'thankyou']);
// Check out
// Route::get('/checkout', [App\Http\Controllers\Frontend\CheckoutController::class, 'index']);

// Forum
// Route::get('/forum', [App\Http\Controllers\Frontend\ForumController::class,'index']);

//Shopping Cart
// Route::get('/shoppingcart', [App\Http\Controllers\Frontend\ShoppingCartController::class,'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin route
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {

    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    // Slider Routes
     Route::controller(App\Http\Controllers\Admin\SliderController::class)->group(function () {

        Route::get('sliders', 'index');
        Route::get('sliders/create', 'create');
        Route::post('sliders/create','store');
        Route::get('sliders/{slider}/edit', 'edit');
        Route::put('sliders/{slider}', 'update');
        Route::get('sliders/{slider}/delete', 'destroy');


    });

    // Category Routes
    Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::get('/category/create', 'create');
        Route::post('/category', 'store');
        Route::get('/category/{category}/edit', 'edit');
        Route::put('/category/{category}', 'update');
    });

    Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function () {
        Route::get('/products', 'index');
        Route::get('/products/create', 'create');
        Route::post('/products', 'store');
        Route::get('/products/{product}/edit', 'edit');
        Route::put('/products/{product}', 'update');
        Route::get('products/{product_id}/delete', 'destroy');

        Route::get('product-image/{product_image_id}/delete','destroyImage');


    });


     Route::get('/brands',App\Livewire\Admin\Brand\Index::class );

     Route::controller(App\Http\Controllers\Admin\ColorController::class)->group(function () {
        Route::get('/colors', 'index');
        Route::get('/colors/create', 'create');
        Route::post('/colors/create', 'store');
        Route::get('/colors/{color}/edit','edit');
        Route::put('/colors/{color_id}', 'update');
        Route::get('/colors/{color_id}/delete','destroy');


    });


});


// Selling Center Routes
// Route::middleware(['auth'])->group(function() {
//     Route::prefix('sellercenter')->group(function() {
//         Route::get('dashboard', [App\Http\Controllers\SellingCenter\DashboardController::class, 'index']);
//         // Add more routes for managing products, categories, etc.




//     });
// });

Route::prefix('sellercenter')->middleware(['auth','isSeller'])->group(function() {

    Route::get('dashboard', [App\Http\Controllers\SellingCenter\DashboardController::class, 'index']);

    //add product view product
    Route::controller(App\Http\Controllers\SellingCenter\ProductController::class)->group(function () {
        Route::get('/products', 'index');
        Route::get('/products/create', 'create');
        Route::post('/products', 'store');
        Route::get('/products/{product}/edit', 'edit');
        Route::put('/products/{product}', 'update');
        Route::get('products/{product_id}/delete', 'destroy');
        Route::get('product-image/{product_image_id}/delete','destroyImage');

    });

    //Reserved buyer
    Route::controller(App\Http\Controllers\SellingCenter\ReservedBuyerController::class)->group(function () {
        Route::get('/reservedbuyer', 'index');
    });

    // sellercenter/orders
    // Route::controller(App\Http\Controllers\SellingCenter\OrderController::class)->group(function () {
    //     Route::get('/orders', 'index');
    // });
});


