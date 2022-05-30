<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
    return redirect(route('website.home'));
});

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

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

        Route::resource('career', \App\Http\Controllers\Admin\CarrerController::class);
        Route::resource('slider', \App\Http\Controllers\Admin\SliderController::class);
        Route::resource('service', \App\Http\Controllers\Admin\ServiceController::class);
        Route::resource('blog', \App\Http\Controllers\Admin\BlogController::class);
        Route::resource('category', \App\Http\Controllers\Admin\CategoryController::class);
        Route::resource('department', \App\Http\Controllers\Admin\DepartmentController::class);
        Route::resource('career.applier', \App\Http\Controllers\Admin\CarrerAppliersController::class);
        Route::get('all-applier', [\App\Http\Controllers\Admin\CarrerAppliersController::class, 'all_applier'])->name('all-applier');
    });

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::group(array('prefix' => '/', 'as' => 'website.', 'middleware' => []), function () {


        Route::get('/', [App\Http\Controllers\WebsiteController::class, 'home'])->name('home');
        Route::get('/categories', [App\Http\Controllers\WebsiteController::class, 'category'])->name('category');
        Route::get('/category/{title?}', [App\Http\Controllers\WebsiteController::class, 'single_category'])->name('single_category');
        Route::get('/category-product', [App\Http\Controllers\WebsiteController::class, 'category_product'])->name('category_product');
        Route::get('/product/{product}/{category?}', [App\Http\Controllers\WebsiteController::class, 'single_product'])->name('single_product');
        Route::get('/contact-us', [App\Http\Controllers\WebsiteController::class, 'contact'])->name('contact');
        Route::post('/contact-us', [App\Http\Controllers\WebsiteController::class, 'contact_post'])->name('contact_post');
        Route::get('/services', [App\Http\Controllers\WebsiteController::class, 'services'])->name('services');
        Route::get('/service/{id}/{name?}', [App\Http\Controllers\WebsiteController::class, 'service'])->name('service');
        Route::get('/blog/{id}/{name?}', [App\Http\Controllers\WebsiteController::class, 'blog'])->name('blog');
        Route::get('/blogs', [App\Http\Controllers\WebsiteController::class, 'blogs'])->name('blogs');
        Route::get('/category-blogs/{id}/{name?}', [App\Http\Controllers\WebsiteController::class, 'categoryBlogs'])->name('category.blogs');
        Route::get('/search-blogs', [App\Http\Controllers\WebsiteController::class, 'searchBlogs'])->name('search.blogs');
        Route::get('/about-us', [App\Http\Controllers\WebsiteController::class, 'aboutUs'])->name('about');
        Route::get('/careers/{title?}', [App\Http\Controllers\WebsiteController::class, 'careers'])->name('carrers');
        Route::post('/careers-apply', [App\Http\Controllers\WebsiteController::class, 'careers_apply'])->name('carrers-apply');

        Route::get('/career', [App\Http\Controllers\WebsiteController::class, 'career'])->name('career');

        Route::get('/application', [App\Http\Controllers\WebsiteController::class, 'application'])->name('application');
    });
});
