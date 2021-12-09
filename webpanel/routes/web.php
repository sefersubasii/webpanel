<?php

use Illuminate\Support\Facades\Route;

/**
 * Frontend
 */
$prefix = request()->is('admin/*') ? '' : request()->segment(1);

    App::setLocale($prefix);
Route::prefix($prefix)->name('frontend.')->group(function () {
    Route::get('/', 'HomeController@index')->name('index');

    Route::post('contact-form', 'ContactController@form')
        ->name('contact.form');

    Route::get(trans('routes.frontend.locale') . '/{locale}', 'LanguageController@switchLang')
        ->where(['locale' => '[a-zA-Z]{2}'])->name('locale');

    Route::get(trans('routes.frontend.corporate.show') . '/{slug?}', 'CorporateController@show')
        ->name('corporate.show');

    Route::get(trans('routes.frontend.contact.show'), 'ContactController@show')
        ->name('contact.show');

    Route::get(trans('routes.frontend.product.search.show') , 'SearchController@searchShow')
        ->name('search');

    Route::redirect(trans('routes.frontend.product.category.show'), '/' . request()->segment(1));
    Route::get(trans('routes.frontend.product.category.show') . '/{slug}', 'ProductController@categoryShow')
        ->name('product.category.show');



    Route::get(trans('routes.frontend.product.category.show') . '/p/{slug}', 'ProductController@categoryProductShow')
        ->name('product.category_product.show');

    Route::get('{slug}', 'ProductController@show')
        ->name('product.show');
});


/**
 * Admin
 */
Route::middleware('auth')->prefix('admin')->namespace('Backend')->group(function () {
    Route::get('/', 'BackendController@index')->name('index');
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
    Route::resource('home-products', 'HomeProductController');
    Route::resource('sliders', 'SliderController');
    Route::resource('pages', 'PageController');
    Route::resource('social-media', 'SocialMediaController');
    Route::resource('addresses', 'AddressController');
    Route::resource('users', 'UserController');
    Route::resource('contact-forms', 'ContactFormController');

    Route::get('settings', 'SettingController@index')->name('settings.index');
    Route::post('settings', 'SettingController@save')->name('settings.save');
    Route::get('settings/delete-file/{setting:key}', 'SettingController@deleteFile')->name('settings.delete_file');
});

Auth::routes();
