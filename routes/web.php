<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registrasiController;
use App\Http\Controllers\userController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\akadController;
use App\Http\Controllers\ProductlisController;
use App\Http\Controllers\productdetailsController;
use App\Http\Controllers\ForumController;

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
// LOGIN CONTROLLER
Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'authenticate']);
Route::get('/logout', [loginController::class, 'logout'])->name('logout');

// REGISTER ROUTE
Route::get('/register', [registrasiController::class, 'index']);
Route::post('/register', [registrasiController::class, 'store']);

// MIDDLEWARE - USER ROUTES
Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/index', function () {
        return redirect('/');
    });
    Route::get('/cart', [ChartController::class, 'index']);
    Route::get('/checkout', [CheckoutController::class, 'index']); // Controller method
    Route::post('/checkout', [CheckoutController::class, 'store']);
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/forget', function () {
    return view('forgetpassword.index');
});

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/setting', function () {
    $title = 'Dashboard';
    $slug = 'dashboardamin';
    return view('profil.setting', compact('title', 'slug'));
});

Route::get('/product', function () {
    return view('product.index');
});

Route::get('/contact', function () {
    return view('contact.index');
});

Route::get('/about', function () {
    return view('About.index');
});

Route::get('/rumahan', function () {
    return view('daftarproduk.rumahan');
});

Route::get('/akad', function () {
    return view('daftarproduk.akad');
});

Route::get('/gedung', function () {
    return view('daftarproduk.gedung');
});

Route::get('/dashboard', function () {
    $title = 'Dashboard';
    $slug = 'dashboard';
    return view('dashboard', compact('title', 'slug'));
});

// Forum
Route::get('/forum', [ForumController::class, 'index']);
Route::post('/forum/post-article', [ForumController::class, 'postArticle'])->name('post.article');

// Product List and Details
Route::get('/productlist', [ProductlisController::class, 'index']);
Route::get('/productdetails', [productdetailsController::class, 'index']);
