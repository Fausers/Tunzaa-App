<?php

use App\Http\Controllers\FrontContrntController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TariffController;
use App\Http\Controllers\TermController;
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

    Route::prefix('sliders')->group(function(){
        Route::get('/', [SliderController::class, 'index'])->name('sliders');
        Route::post('store', [SliderController::class, 'store']);
        Route::get('show/{id}', [SliderController::class, 'show']);
        Route::get('create', [SliderController::class, 'create']);
        Route::get('edit/{id}', [SliderController::class, 'edit']);
        Route::post('update/{id}', [SliderController::class, 'update']);
        Route::get('delete/{id}', [SliderController::class, 'destroy']);
        Route::get('activate/{id}', [SliderController::class, 'activate']);
    });

    Route::prefix('front')->group(function(){
        Route::get('/', [FrontContrntController::class, 'index'])->name('front');
        Route::post('store', [FrontContrntController::class, 'store']);
        Route::get('show/{id}', [FrontContrntController::class, 'show']);
        Route::get('edit', [FrontContrntController::class, 'edit']);
        Route::post('update', [FrontContrntController::class, 'update']);
        Route::get('delete/{id}', [FrontContrntController::class, 'destroy']);
        Route::get('activate/{id}', [FrontContrntController::class, 'activate']);
    });

    Route::prefix('tariffs')->group(function(){
        Route::get('/', [TariffController::class, 'index'])->name('tariffs');
        Route::get('/create', [TariffController::class, 'create'])->name('create_tariff');
        Route::post('store', [TariffController::class, 'storeImage']);
        Route::get('edit/{id}', [TariffController::class, 'edit']);
        Route::post('update/{id}', [TariffController::class, 'update']);
        Route::get('delete/{id}', [TariffController::class, 'destroy']);
        Route::get('activate/{id}', [TariffController::class, 'activate']);
    });

    Route::prefix('term')->group(function(){
        Route::get('/', [TermController::class, 'index'])->name('term');
        Route::get('/create', [TermController::class, 'create'])->name('create_term');
        Route::post('update}', [TermController::class, 'update'])->name("update_terms_data");

        Route::post('store', [TermController::class, 'store']);
        Route::get('edit/{id}', [TermController::class, 'edit']);
        Route::get('delete/{id}', [TermController::class, 'destroy']);
        Route::get('activate/{id}', [TermController::class, 'activate']);
    });

    Route::prefix('crm')->group(function(){
        Route::get('my_about', [CRMController::class, 'about'])->name('my_about');
        Route::post('update_my_about', [CRMController::class, 'updateAbout'])->name('update_my_about');

        Route::post('update', [CRMController::class, 'update'])->name("update_terms");

        Route::post('store', [CRMController::class, 'store']);
        Route::get('edit/{id}', [CRMController::class, 'edit']);
        Route::get('delete/{id}', [CRMController::class, 'destroy']);
        Route::get('activate/{id}', [CRMController::class, 'activate']);

        Route::get('others', [CRMController::class, 'others'])->name('others');
        Route::post('update_others', [CRMController::class, 'updateOthers'])->name('update_others');
    });




});

Route::group(['middleware' => ['web']], function () {

    Route::get('/', [WelcomeController::class, 'welcome']);
    Route::get('/index', [WelcomeController::class, 'index']);
    Route::get('/our_tariffs', [TariffController::class, 'tariffs']);
    Route::get('/terms', [TermController::class, 'terms'])->name('terms');

    Route::prefix('contact')->group(function(){
        Route::get('/', [ContactController::class, 'index'])->name('contact');
    });

    Route::prefix('about')->group(function(){
        Route::get('/', [AboutController::class, 'index'])->name('about');
    });

});

require __DIR__.'/auth.php';

