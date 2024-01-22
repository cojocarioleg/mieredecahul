<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PersonalAreaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SingleProductController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use TCG\Voyager\Facades\Voyager;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('/products', [ProductController::class, 'index'])->name('products');
        Route::get('/search', [ProductController::class, 'search'])->name('search');
        Route::get('/news', [NewsController::class, 'index'])->name('news');
        Route::get('/searchNews', [NewsController::class, 'search'])->name('searchNews');
        Route::get('/singleNew/{new}', [NewsController::class, 'singleNew'])->name('singleNew');
        Route::get('/services', [ServicesController::class, 'index'])->name('services');
        Route::get('/searchService', [ServicesController::class, 'search'])->name('searchService');
        Route::get('/singleService/{service}', [ServicesController::class, 'singleService'])->name('singleService');
        Route::get('/product/{product}', [SingleProductController::class, 'index'])->name('product');
        Route::post('/addReview/{product}', [SingleProductController::class, 'addReview'])->name('addReview');
        Route::get('/addToBasket', [CartController::class, 'addToBasket'])->name('addToBasket');
        Route::post('/addToBasket', [CartController::class, 'addToBasket'])->name('addToBasket');
        Route::delete('/removeToBasket/{product}', [CartController::class, 'removeToBasket'])->name('removeToBasket');
        Route::get('/personalArea', [PersonalAreaController::class, 'personalArea'])->name('personalArea')->middleware('auth');
        Route::post('/personalArea', [PersonalAreaController::class, 'update'])->name('personalArea')->middleware('auth');
        Route::get('/team', [TeamController::class, 'team'])->name('team');
        Route::get('/shopingCart', [BasketController::class, 'shopingCart'])->name('shopingCart')->middleware('auth');
        Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout')->middleware('auth');
        Route::post('/minusToBasket', [BasketController::class, 'minusToBasket'])->name('minusToBasket')->middleware('auth');
        Route::post('/makeOrder', [CheckoutController::class, 'makeOrder'])->name('makeOrder')->middleware('auth');
        Route::post('/products', [ProductController::class, 'paginate'])->name('paginate');    
        Route::group(['prefix' => 'admin'], function () {
            Voyager::routes();
        });
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');

    }
);
Route::delete('/personalAreaDestroy}', [PersonalAreaController::class, 'destroy'])->name('personalAreaDestroy')->middleware('auth');
Route::delete('/removeOrder/{order}', [CheckoutController::class, 'removeOrder'])->name('removeOrder')->middleware('auth');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
