<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CatalogController;
use App\Http\Controllers\Admin\CertificateFileController;
use App\Http\Controllers\Admin\CertificateTypeController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Front\FrontController;
use Illuminate\Support\Facades\Artisan;
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


Auth::routes();

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);

    if (request()->fullUrl() === redirect()->back()->getTargetUrl()) {
        return redirect('/');
    }

    return redirect()->back();
});

/*
|--------------------------------------------------------------------------
| Frontend UI
|--------------------------------------------------------------------------|
*/

Route::get('/', [FrontController::class, 'index']);
Route::group(['prefix' => 'product'], function () {
    Route::get('/all', [FrontController::class, 'product']);
    Route::get('/{type}', [FrontController::class, 'products']);
    Route::get('/{type}/{title}/{id}', [FrontController::class, 'singleProduct']);
});

Route::group(['prefix' => 'fabric'], function () {
    Route::get('/cotton', [FrontController::class, 'cotton']);
    Route::get('/silk', [FrontController::class, 'silk']);
    Route::get('/lace', [FrontController::class, 'lace']);
    Route::get('/other', [FrontController::class, 'other']);
});
Route::group(['prefix' => 'blog'], function () {
    Route::get('/all', [FrontController::class, 'blog'])->name('all');
    Route::get('/more', [FrontController::class, 'blogMore'])->name('more');
    Route::get('/single/{id}', [FrontController::class, 'singleBlog']);
});
Route::get('/about_us', [FrontController::class, 'about'])->name('about_us');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::post('/sending_message', [FrontController::class, 'sendingMessage'])->name('sending_message');
Route::get('/404', [FrontController::class, 'error'])->name('404');
Route::get('/login', [FrontController::class, 'error'])->name('login');
Route::get('/register', [FrontController::class, 'error'])->name('register');
Route::get('/lam/under_under', [FrontController::class, 'login'])->name('lam/under_under');


/*
|--------------------------------------------------------------------------
| Backend Admin
|--------------------------------------------------------------------------|
*/


Route::group(['middleware' => 'admin'], function () {
    Route::get('/news', [AdminController::class, 'index'])->name('news');
    Route::get('/blogs_single/{id}', [AdminController::class, 'singleBlog']);
    Route::post('/blogs/create', [AdminController::class, 'uploadImage'])->name('blog-image');
    Route::resource('blogs', AdminController::class);
    Route::post('/remove-blog', [AdminController::class, 'removeBlog']);

    Route::get('/material', [MaterialController::class, 'index'])->name('material');
    Route::post('/materials/create', [MaterialController::class, 'uploadImage'])->name('fabric-image');
    Route::resource('materials', MaterialController::class);

    Route::get('/type', [TypeController::class, 'index'])->name('type');
    Route::resource('types', TypeController::class);

    Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
    Route::post('/catalogs/create', [CatalogController::class, 'productImage'])->name('product-image');
    Route::resource('catalogs', CatalogController::class);
    Route::post('/remove-product', [CatalogController::class, 'removeProduct']);

    Route::get('/message_list', [AdminController::class, 'messageList'])->name('message_list');
    Route::get('/message_single/{id}', [AdminController::class, 'singleMessage']);
    Route::post('/remove', [AdminController::class, 'removeMessage'])->name('remove');

    Route::get('/certificate-type', [CertificateTypeController::class, 'index'])->name('certificate-type');
    Route::resource('certificate-types', CertificateTypeController::class);
    Route::delete('/remove-certificate-type/{id}', [CertificateTypeController::class, 'destroy']);

    Route::get('/certificate-file', [CertificateFileController::class, 'index'])->name('certificate-file');
    Route::resource('certificate-files', CertificateFileController::class);
    Route::post('/certificate-image/create', [CertificateFileController::class, 'uploadFile'])->name('certificate-image');
    Route::post('/remove-certificate/{id}', [CertificateFileController::class, 'removeCertificate']);
});
