<?php

use App\Http\Controllers\Category\CreateController;
use App\Http\Controllers\Category\DeleteController;
use App\Http\Controllers\Category\EditController;
use App\Http\Controllers\Category\IndexController as CategoryIndexController;
use App\Http\Controllers\Category\ShowController;
use App\Http\Controllers\Category\StoreController;
use App\Http\Controllers\Category\UpdateController;
use App\Http\Controllers\Color\ColorCreateController;
use App\Http\Controllers\Color\ColorDeleteController;
use App\Http\Controllers\Color\ColorEditController;
use App\Http\Controllers\Color\ColorIndexController;
use App\Http\Controllers\Color\ColorShowController;
use App\Http\Controllers\Color\ColorStoreController;
use App\Http\Controllers\Color\ColorUpdateController;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Order\OrderCreateController;
use App\Http\Controllers\Order\OrderDeleteController;
use App\Http\Controllers\Order\OrderEditController;
use App\Http\Controllers\Order\OrderExcelReportController;
use App\Http\Controllers\Order\OrderExcelReportPhpController;
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
use App\Http\Controllers\Tag\TagCreateController;
use App\Http\Controllers\Tag\TagDeleteController;
use App\Http\Controllers\Tag\TagEditController;
use App\Http\Controllers\Tag\TagIndexController;
use App\Http\Controllers\Tag\TagShowController;
use App\Http\Controllers\Tag\TagStoreController;
use App\Http\Controllers\Tag\TagUpdateController;
use App\Http\Controllers\User\UserCreateController;
use App\Http\Controllers\User\UserDeleteController;
use App\Http\Controllers\User\UserEditController;
use App\Http\Controllers\User\UserIndexController;
use App\Http\Controllers\User\UserShowController;
use App\Http\Controllers\User\UserStoreController;
use App\Http\Controllers\User\UserUpdateController;
use App\Http\Controllers\Weather\WeatherIndexController;
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

Route::group(['prefix' => 'categories'], function () {

    Route::get('/', CategoryIndexController::class)->name('category.index');
    Route::get('/create', CreateController::class)->name('category.create');
    Route::post('/', StoreController::class)->name('category.store');
    Route::get('/{category}/edit', EditController::class)->name('category.edit');
    Route::get('/{category}', ShowController::class)->name('category.show');
    Route::patch('/{category}', UpdateController::class)->name('category.update');
    Route::delete('/{category}', DeleteController::class)->name('category.delete');
});

Route::group(['prefix' => 'orders'], function () {

    Route::get('/', OrderIndexController::class)->name('order.index');
    Route::get('/generate_exel_report_laravel', OrderExcelReportController::class)->name('order.exel_report_laravel');
    Route::get('/generate_exel_report_php', OrderExcelReportPhpController::class)->name('order.exel_report_php');
    Route::get('/create', OrderCreateController::class)->name('order.create');
    Route::post('/', OrderStoreController::class)->name('order.store');
    Route::get('/{order}/edit', OrderEditController::class)->name('order.edit');
    Route::get('/{order}', OrderShowController::class)->name('order.show');
    Route::patch('/{order}', OrderUpdateController::class)->name('order.update');
    Route::delete('/{order}', OrderDeleteController::class)->name('order.delete');
});

Route::group(['prefix' => 'products'], function () {

    Route::get('/', ProductIndexController::class)->name('product.index');
    Route::get('/create', ProductCreateController::class)->name('product.create');
    Route::post('/', ProductStoreController::class)->name('product.store');
    Route::get('/{product}/edit', ProductEditController::class)->name('product.edit');
    Route::get('/{product}', ProductShowController::class)->name('product.show');
    Route::patch('/{product}', ProductUpdateController::class)->name('product.update');
    Route::delete('/{product}', ProductDeleteController::class)->name('product.delete');
});

Route::group(['prefix' => 'tags'], function () {

    Route::get('/', TagIndexController::class)->name('tag.index');
    Route::get('/create', TagCreateController::class)->name('tag.create');
    Route::post('/', TagStoreController::class)->name('tag.store');
    Route::get('/{tag}/edit', TagEditController::class)->name('tag.edit');
    Route::get('/{tag}', TagShowController::class)->name('tag.show');
    Route::patch('/{tag}', TagUpdateController::class)->name('tag.update');
    Route::delete('/{tag}', TagDeleteController::class)->name('tag.delete');
});

Route::group(['prefix' => 'colors'], function () {

    Route::get('/', ColorIndexController::class)->name('color.index');
    Route::get('/create', ColorCreateController::class)->name('color.create');
    Route::post('/', ColorStoreController::class)->name('color.store');
    Route::get('/{color}/edit', ColorEditController::class)->name('color.edit');
    Route::get('/{color}', ColorShowController::class)->name('color.show');
    Route::patch('/{color}', ColorUpdateController::class)->name('color.update');
    Route::delete('/{color}', ColorDeleteController::class)->name('color.delete');
});

Route::group(['prefix' => 'users'], function () {

    Route::get('/', UserIndexController::class)->name('user.index');
    Route::get('/create', UserCreateController::class)->name('user.create');
    Route::post('/', UserStoreController::class)->name('user.store');
    Route::get('/{user}/edit', UserEditController::class)->name('user.edit');
    Route::get('/{user}', UserShowController::class)->name('user.show');
    Route::patch('/{user}', UserUpdateController::class)->name('user.update');
    Route::delete('/{user}', UserDeleteController::class)->name('user.delete');
});

Route::group(['prefix' => 'weather'], function () {

    Route::get('/', WeatherIndexController::class)->name('weather.index');
});
