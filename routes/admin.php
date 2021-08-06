<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CompanyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/', [HomeController::class, 'index']);

Route::prefix('san-pham')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('xoa/{id}', [ProductController::class, 'remove'])->middleware('auth')->name('product.remove');
    Route::get('tao-moi', [ProductController::class, 'addForm'])->middleware('auth')->name('product.add');
    Route::post('tao-moi', [ProductController::class, 'saveAdd']);
    Route::get('cap-nhat/{id}', [ProductController::class, 'editForm'])->middleware('auth')->name('product.edit');
    Route::post('cap-nhat/{id}', [ProductController::class, 'saveEdit']);
});

Route::prefix('danh-muc')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('detail/{id}', [CategoryController::class, 'detail'])->name('category.detail');
    Route::get('xoa/{id}', [CategoryController::class, 'remove'])->middleware('auth')->name('category.remove');
    Route::get('tao-moi', [CategoryController::class, 'addForm'])->middleware('auth')->name('category.add');
    Route::post('tao-moi', [CategoryController::class, 'saveAdd']);
    Route::get('cap-nhat/{id}', [CategoryController::class, 'editForm'])->middleware('auth')->name('category.edit');
    Route::post('cap-nhat/{id}', [CategoryController::class, 'saveEdit']);
});

Route::prefix('Hang-xe')->group(function () {
    Route::get('/', [CompanyController::class, 'index'])->name('company.index');
    Route::get('xoa/{id}', [CompanyController::class, 'remove'])->middleware('auth')->name('company.remove');
    Route::get('tao-moi', [CompanyController::class, 'addForm'])->middleware('auth')->name('company.add');
    Route::post('tao-moi', [CompanyController::class, 'saveAdd']);
    Route::get('cap-nhat/{id}', [CompanyController::class, 'editForm'])->middleware('auth')->name('company.edit');
    Route::post('cap-nhat/{id}', [CompanyController::class, 'saveEdit']);
});

Route::prefix('tai-khoan')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('xoa/{id}', [UserController::class, 'remove'])->middleware('auth')->name('user.remove');
    Route::get('tao-moi', [UserController::class, 'addForm'])->middleware('auth')->name('user.add');
    Route::post('tao-moi', [UserController::class, 'saveAdd']);
    Route::get('cap-nhat/{id}', [UserController::class, 'editForm'])->middleware('auth')->name('user.edit');
    Route::post('cap-nhat/{id}', [UserController::class, 'saveEdit']);
});

?>
