<?php

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\UserLogin;
use App\Http\Livewire\Auth\UserLogout;
use App\Http\Livewire\Auth\UserRegistration;
use App\Http\Livewire\Main\About;
use App\Http\Livewire\User\Cart;
use App\Http\Livewire\User\CheckOut;
use App\Http\Livewire\Main\Contact;
use App\Http\Livewire\Main\Home;
use App\Http\Livewire\Main\ProductDetail;
use App\Http\Livewire\Main\Products;
use App\Http\Livewire\User\Account;
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

Route::get('/', Home::class)->name('home');

Route::middleware('guest')->group(function(){
    Route::get('/register', UserRegistration::class)->name('register');
    Route::get('/login', UserLogin::class)->name('login');
    Route::get('/forgot-password', ForgotPassword::class)->name('forgot');
});

Route::middleware('auth')->group(function() {
    Route::post('/logout', UserLogout::class)->name('logout');
    Route::get('/account', Account::class)->name('account');
    Route::get('/checkout', CheckOut::class)->name('checkout');
    Route::get('/reset-password', ResetPassword::class)->name('reset');
    Route::get('/cart', Cart::class)->name('cart');
});

Route::get('/products/{type?}', Products::class)->name('products');
Route::get('/products/search/{product}', ProductDetail::class)->name('product-detail')  ;

Route::get('/about', About::class)->name('about');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/privacy', fn() => null)->name('privacy');
Route::get('/terms', fn() => null)->name('terms');
