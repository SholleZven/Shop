<?php

use App\Http\Controllers\Category\CreateController;
use App\Http\Controllers\Category\DeleteController;
use App\Http\Controllers\Category\EditController;
use App\Http\Controllers\Category\IndexController as CategoryIndexController;
use App\Http\Controllers\Category\ShowController;
use App\Http\Controllers\Category\StoreController;
use App\Http\Controllers\Category\UpdateController;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Order\OrderCreateController;
use App\Http\Controllers\Order\OrderDeleteController;
use App\Http\Controllers\Order\OrderEditController;
use App\Http\Controllers\Order\OrderIndexController;
use App\Http\Controllers\Order\OrderShowController;
use App\Http\Controllers\Order\OrderStoreController;
use App\Http\Controllers\Order\OrderUpdateController;
use App\Http\Controllers\Product\ProductCreateController;
use App\Http\Controllers\Product\ProductDeleteController;
use App\Http\Controllers\Product\ProductEditController;
use App\Http\Controllers\Product\ProductIndexController;
use App\Http\Controllers\Product\ProductShowController;
use App\Http\Controllers\Product\ProductStoreController;
use App\Http\Controllers\Product\ProductUpdateController;
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

Route::get('/', IndexController::class)->name('main.index');

Route::group(['prefix' => 'categories'], function() {

    Route::get('/', CategoryIndexController::class)->name('category.index');
    Route::get('/create', CreateController::class)->name('category.create');
    Route::post('/', StoreController::class)->name('category.store');
    Route::get('/{category}/edit', EditController::class)->name('category.edit');
    Route::get('/{category}', ShowController::class)->name('category.show');
    Route::patch('/{category}', UpdateController::class)->name('category.update');
    Route::delete('/{category}', DeleteController::class)->name('category.delete');

});

Route::group(['prefix' => 'orders'], function() {

    Route::get('/', OrderIndexController::class)->name('order.index');
    Route::get('/create', OrderCreateController::class)->name('order.create');
    Route::post('/', OrderStoreController::class)->name('order.store');
    Route::get('/{order}/edit', OrderEditController::class)->name('order.edit');
    Route::get('/{order}', OrderShowController::class)->name('order.show');
    Route::patch('/{order}', OrderUpdateController::class)->name('order.update');
    Route::delete('/{order}', OrderDeleteController::class)->name('order.delete');

});

Route::group(['prefix' => 'products'], function() {

    Route::get('/', ProductIndexController::class)->name('product.index');
    Route::get('/create', ProductCreateController::class)->name('product.create');
    Route::post('/', ProductStoreController::class)->name('product.store');
    Route::get('/{product}/edit', ProductEditController::class)->name('product.edit');
    Route::get('/{product}', ProductShowController::class)->name('product.show');
    Route::patch('/{product}', ProductUpdateController::class)->name('product.update');
    Route::delete('/{product}', ProductDeleteController::class)->name('product.delete');

});
