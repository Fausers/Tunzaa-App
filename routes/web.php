<?php

use App\Http\Controllers\FrontContrntController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TariffController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\Tunzaa\OrderController;
use App\Http\Controllers\Tunzaa\ProductController;
use App\Http\Controllers\Tunzaa\ShopController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CRMController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group(['namespace' => 'App\Http\Controllers\CBS','middleware' => ['auth']], function () {

    Route::prefix('order')->group(function(){
        Route::get('create/{id}', [OrderController::class, 'create'])->name('create_order');
        Route::post('store/{id}', [OrderController::class, 'store'])->name('store_order');
        Route::get('mine', [OrderController::class, 'myOrders'])->name('my_orders');
    });

    Route::prefix('app/products')->group(function(){
        Route::get('/', [ProductController::class, 'index'])->name('shop_products');
        Route::get('create', [ProductController::class, 'create'])->name('create_product');
        Route::post('store', [ProductController::class, 'store'])->name('store_product');
        Route::get('show/{id}', [ProductController::class, 'show'])->name('show_product');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit_product');
        Route::post('update/{id}', [ProductController::class, 'update'])->name('update_product');
        Route::get('delete/{id}', [ProductController::class, 'destroy'])->name('destroy_product');
        Route::get('activate/{id}', [ProductController::class, 'activate'])->name('activate_product');
    });

});

Route::group(['middleware' => ['web']], function () {

    Route::get('/', [WelcomeController::class, 'welcome']);

    Route::prefix('shop')->group(function(){
        Route::get('/', [ShopController::class, 'shop'])->name('shop');
        Route::get('/product/{id}', [ShopController::class, 'product'])->name('product');
    });


});

require __DIR__.'/auth.php';

