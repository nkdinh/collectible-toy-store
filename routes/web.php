<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ToyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;


Route::prefix('admin-side')->group(function () {
    Route::prefix('toy-manager')->group(function () {
        Route::get('/', [ToyController::class, 'index'])->name('toy.index')->middleware('loginAdmin');
        Route::get('/create', [ToyController::class, 'create'])->name('toy.create');
        Route::post('/create', [ToyController::class, 'store'])->name('toy.store');
        Route::get('/create-category', [ToyController::class, 'createCategory'])->name('toy.createCategory');
        Route::post('/create-category', [ToyController::class, 'storeCategory'])->name('toy.storeCategory');
        Route::get('/update/{id}', [ToyController::class, 'edit'])->name('toy.edit');
        Route::post('/update/{id}', [ToyController::class, 'update'])->name('toy.update');
        Route::get('/delete/{id}', [ToyController::class, 'confirm'])->name('toy.confirm');
        Route::post('/delete/{id}', [ToyController::class, 'delete'])->name('toy.delete');
        Route::get('/product-categories', [ToyController::class, 'getCategories'])->name('toy.getCategories');
        Route::get('/product-categories/{id}', [ToyController::class, 'categoryUpdate'])->name('category.update');
        Route::post('/product-categories/{id}', [ToyController::class, 'categoryEdit'])->name('category.edit');
        Route::get('/search', [ToyController::class, 'SearchProduct'])->name('FindProductByName');
        Route::get('/categories-delete/{id}', [ToyController::class, 'categoryConfirm'])->name('product_categories.confirm');
        Route::post('/categories-delete/{id}', [ToyController::class, 'categoryDelete'])->name('product_categories.delete');
    });

    Route::prefix('customerManager')->group(function () {
        Route::get('/account', [RegisterController::class, 'userAccount'])->name('user.account');
        Route::get('/update/{id}', [RegisterController::class, 'editCustomer'])->name('user.edit');
        Route::post('/update/{id}', [RegisterController::class, 'updateCustomer'])->name('user.update');
        Route::get('/delete/{id}', [RegisterController::class, 'confirmCustomer'])->name('user.confirm');
        Route::post('/delete/{id}', [RegisterController::class, 'deleteCustomer'])->name('user.delete');

    });
    Route::get('/create', [AdminController::class, 'createAdmin'])->name('admin.create');
    Route::post('/create', [AdminController::class, 'storeAdmin'])->name('admin.storeAdmin');
    Route::get('/admin', [AdminController::class, 'adminAccount'])->name('admin.account');
    Route::get('/myaccount/{username}', [AdminController::class, 'myAccount'])->name('admin.myaccount');
    Route::get('/update/{username}', [AdminController::class, 'editAdmin'])->name('admin.edit');
    Route::post('/update/{username}', [AdminController::class, 'updateAdmin'])->name('admin.update');
});


Route::prefix('/')->group(function () {
    Route::get('/', [Usercontroller::class, 'index'])->name('user.view');
    Route::get('/my-account/{clientUsername}', [UserAuthController::class, 'myAccount'])->name('client.my-account');
    Route::get('/search', [UserController::class, 'ClientSearchPet'])->name('user.FindProductByName');
    Route::get('/Detail/{id}', [Usercontroller::class, 'GetProductById'])->name('Product.Detail');
    Route::get('/Filter/{id}', [UserController::class, 'FilterProduct'])->name('FilterProduct');
    // Route::get('/Filter/{id}', [UserController::class, 'FilterProduct'])->name('FilterProduct');
    Route::get('/AboutUs', [UserController::class, 'AboutUs'])->name('user.aboutus');
    Route::get('/Tip', [UserController::class, 'Tip'])->name('user.tip');
    Route::get('/gallery', [UserController::class, 'gallery'])->name('user.gallery');
});


Route::prefix('userauth')->group(function () {
    Route::get('/login-client', [UserAuthController::class, 'loginClientIndex']);
    Route::post('/login-client', [UserAuthController::class, 'loginClient',])->name('client.login');
    Route::get('/login', [UserAuthController::class, 'index']);
    Route::post('/login', [UserAuthController::class, 'login',])->name('admin.login');
    Route::get('/register', [RegisterController::class, 'index',])->name('user.register');
    Route::post('/register', [RegisterController::class, 'storeAccount'])->name('user.store');
    Route::get('', [UserAuthController::class, 'logout'])->name('admin.logout');
});

