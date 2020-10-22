<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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



Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);

    if (request()->fullUrl() === redirect()->back()->getTargetUrl()) {
        return redirect('/');
    }

    return redirect()->back();
});

Auth::routes();

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------|
*/
Route::prefix('')->namespace('Front')->group(function () {
    //Главная
    Route::name('home')->get('/', 'FrontController@index');
    Route::name('search')->post('/search', 'FrontController@search');
    Route::name('search_error')->get('/search_error', 'FrontController@searchError');
    //Kаталог
    Route::name('catalog_type')->get('/catalog_type/{id}', 'FrontController@catalog_type');
    Route::name('catalog')->get('/catalog/{id}', 'FrontController@catalog');
    Route::name('single_catalog')->get('/single_catalog/{id}', 'FrontController@singleCatalog');
    //Информация
    Route::name('pay_del')->get('/pay_del', 'FrontController@payDel');
    Route::name('size')->get('/size', 'FrontController@size');
    Route::name('fabric')->get('/fabric', 'FrontController@fabric');
    Route::name('rules')->get('/rules', 'FrontController@rules');
    //Оптовикам
    Route::name('price-list')->get('/price-list', 'FrontController@price');
    Route::name('ask-price')->post('/ask-price', 'FrontController@askPrice');
    Route::name('for-delivery')->get('/for-deliver', 'FrontController@forDel');
    Route::name('shop')->get('/shop', 'FrontController@onlineShop');
    //Контакты
    Route::name('contact')->get('/contact', 'FrontController@contact');
    Route::name('message')->post('/message', 'FrontController@message');
    //Рубрики
    Route::name('blog')->get('/blog', 'FrontController@blog');
    Route::name('single_blog')->get('/single_blog/{id}', 'FrontController@singleBlog');
    Route::name('kalonka_style')->get('/kalonka_style', 'FrontController@kalonkaStyle');
    Route::name('single_style')->get('/single_style/{id}', 'FrontController@singleKalonka');
    Route::name('modniy_obriz')->get('/modniy_obriz', 'FrontController@modniyObriz');
    Route::name('single_obriz')->get('/single_obriz/{id}', 'FrontController@singleObriz');
    Route::name('useful_tips')->get('/useful_tips', 'FrontController@usefulTips');
    Route::name('single_tips')->get('/single_tips/{id}', 'FrontController@singleTips');
    //Скидки
    Route::name('sale')->get('/sale', 'FrontController@sale');
    //Access error
    Route::name('register')->get('/register', 'FrontController@register');
    Route::name('login')->get('/login', 'FrontController@login');
    //login
    Route::name('under_under')->get('/under_under', 'FrontController@loginAdmin');
    Route::name('yandex_901f6214fc1ea6aa.html')->get('/yandex_901f6214fc1ea6aa.html', 'FrontController@yandex');

});

/*
|--------------------------------------------------------------------------
| Backend
|--------------------------------------------------------------------------|
*/
Route::prefix('')->middleware('admin')->namespace('Back')->group(function () {
    Route::name('under')->get('/under', 'AdminController@index');
    Route::resource('news', 'AdminController');
    Route::name('upload')->post('/news/create', 'AdminController@upload'); //!!!upload
    Route::name('newssingle')->get('/newssingle/{id}', 'AdminController@newsSingle');
    //category
    Route::name('category_back')->get('/category_back', 'CategoryController@index');
    Route::resource('categories', 'CategoryController');
    //katalog
    Route::name('katalog')->get('/katalog', 'CatalogController@index');
    Route::name('upload_img')->post('/catalogs/create', 'CatalogController@upload'); //!!!upload
    Route::resource('catalogs', 'CatalogController');
    //model
    Route::name('modeli')->get('/modeli', 'ModelController@index');
    Route::resource('models', 'ModelController');
    Route::name('image-upload')->post('/models/create', 'ModelController@upload'); //!!!upload
    Route::name('model_single')->get('/model_single/{id}', 'ModelController@modelSingle');
    //modniy obraz page
    Route::name('modniy')->get('/modniy', 'FormController@index');
    Route::resource('forms', 'FormController');
    Route::name('upload_form')->post('/forms/create', 'FormController@upload'); //!!!upload
    Route::name('formsingle')->get('/formsingle/{id}', 'FormController@newsSingle');
    //kalonka stilist page
    Route::name('kalonka')->get('/kalonka', 'KalonkaController@index');
    Route::resource('kalonkas', 'KalonkaController');
    Route::name('upload_imge')->post('/kalonkas/create', 'KalonkaController@upload'); //!!!upload
    Route::name('kalonkasingle')->get('/kalonkasingle/{id}', 'KalonkaController@newsSingle');
    //useful tips page
    Route::name('tip')->get('/tip', 'TipController@index');
    Route::resource('tips', 'TipController');
    Route::name('upload_image')->post('/tips/create', 'TipController@upload'); //!!!upload
    Route::name('tipsingle')->get('/tipsingle/{id}', 'TipController@newsSingle');

    //message page
    Route::name('xabar')->get('/xabar', 'AdminController@message');
    Route::name('remove')->post('/remove', 'AdminController@remove');
    Route::name('messagesingle')->get('/messagesingle/{id}', 'AdminController@messageSingle');

    //askPrice page
    Route::name('narx')->get('/narx', 'AdminController@priceMessage');
    Route::name('remove_price')->post('/remove_price', 'AdminController@removePrice');
    Route::name('priceessagesingle')->get('/pricemessagesingle/{id}', 'AdminController@PriceMessageSingle');

});
