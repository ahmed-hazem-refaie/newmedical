<?php

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

Route::get('/', function () {
    return view('welcome');
});



Route::group(array('prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ['auth']), function () {
    Route::get('/', function () {
        return view('admin.home.index');
    })->name('home');
    Route::resource('setting', \App\Http\Controllers\Admin\SettingController::class);
    Route::post('setting-store-value', [\App\Http\Controllers\Admin\SettingController::class, 'storevalue'])->name('setting.storevalue');
    Route::resource('setting.field', \App\Http\Controllers\Admin\SettingFieldController::class);
    Route::resource('admins', \App\Http\Controllers\Admin\AdminController::class);
    Route::post('addOrRemove_admin', [\App\Http\Controllers\Admin\AdminController::class, 'addOrRemove_admin'])->name('addOrRemove_admin');

    Route::resource('rolepermission', \App\Http\Controllers\Admin\RolePermissionController::class);

    Route::get('rolepermission-users/{role}', [\App\Http\Controllers\Admin\RolePermissionUserController::class, 'index'])->name('rolepermission-user');
    Route::post('rolepermission-users', [\App\Http\Controllers\Admin\RolePermissionUserController::class, 'store'])->name('change-rolepermission-user');
    Route::post('togleactivationemodel', [\App\Http\Controllers\Admin\ActivationController::class, 'activateanddeactive'])->name('togleactivationemodel');
    Route::resource('contact', \App\Http\Controllers\Admin\ContactController::class);
    Route::resource('maincategory', \App\Http\Controllers\Admin\MainCategoryController::class);
    Route::resource('partner', \App\Http\Controllers\Admin\PartnerController::class);
    Route::resource('maincategory.product', \App\Http\Controllers\Admin\ProductController::class);
    Route::resource('product.productfaq', \App\Http\Controllers\Admin\ProductFaqController::class);
    Route::resource('product.productmedia', \App\Http\Controllers\Admin\ProductMediaController::class);


    
});

// Route::resource('product', \App\Http\Controllers\User\ProductController::class);
// Route::post('contact', [\App\Http\Controllers\User\ContactController::class,'send'])->name('user.contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(array('prefix' => '/', 'as' => 'website.', 'middleware' => []), function () {


    Route::get('/home_2', [App\Http\Controllers\WebsiteController::class, 'home'])->name('home');
    Route::get('/categories', [App\Http\Controllers\WebsiteController::class, 'category'])->name('category');
    Route::get('/category/{title?}', [App\Http\Controllers\WebsiteController::class, 'single_category'])->name('single_category');
    Route::get('/category-product', [App\Http\Controllers\WebsiteController::class, 'category_product'])->name('category_product');
    Route::get('/product/{product}/{category?}', [App\Http\Controllers\WebsiteController::class, 'single_product'])->name('single_product');
    Route::get('/contact-us', [App\Http\Controllers\WebsiteController::class, 'contact'])->name('contact');
    Route::post('/contact-us', [App\Http\Controllers\WebsiteController::class, 'contact_post'])->name('contact_post');

});

 