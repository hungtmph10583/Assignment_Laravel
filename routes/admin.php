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
    Route::get('xoa/{id}', [ProductController::class, 'remove'])->name('product.remove');
    Route::get('tao-moi', [ProductController::class, 'addForm'])->name('product.add');
    Route::post('tao-moi', [ProductController::class, 'saveAdd']);
    Route::get('cap-nhat/{id}', [ProductController::class, 'editForm'])->name('product.edit');
    Route::post('cap-nhat/{id}', [ProductController::class, 'saveEdit']);
});

Route::prefix('danh-muc')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('detail/{id}', [CategoryController::class, 'detail'])->name('category.detail');
    Route::get('xoa/{id}', [CategoryController::class, 'remove'])->name('category.remove');
    Route::get('tao-moi', [CategoryController::class, 'addForm'])->name('category.add');
    Route::post('tao-moi', [CategoryController::class, 'saveAdd']);
    Route::get('cap-nhat/{id}', [CategoryController::class, 'editForm'])->name('category.edit');
    Route::post('cap-nhat/{id}', [CategoryController::class, 'saveEdit']);
});

Route::prefix('Hang-xe')->group(function () {
    Route::get('/', [CompanyController::class, 'index'])->name('company.index');
    Route::get('xoa/{id}', [CompanyController::class, 'remove'])->name('company.remove');
    Route::get('tao-moi', [CompanyController::class, 'addForm'])->name('company.add');
    Route::post('tao-moi', [CompanyController::class, 'saveAdd']);
    Route::get('cap-nhat/{id}', [CompanyController::class, 'editForm'])->name('company.edit');
    Route::post('cap-nhat/{id}', [CompanyController::class, 'saveEdit']);
});

Route::prefix('tai-khoan')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('xoa/{id}', [UserController::class, 'remove'])->name('user.remove');
    Route::get('tao-moi', [UserController::class, 'addForm'])->name('user.add');
    Route::post('tao-moi', [UserController::class, 'saveAdd']);
    Route::get('cap-nhat/{id}', [UserController::class, 'editForm'])->name('user.edit');
    Route::post('cap-nhat/{id}', [UserController::class, 'saveEdit']);
});

?>
