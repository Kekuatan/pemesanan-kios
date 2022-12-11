<?php

use App\Http\Controllers\Web\LogoutController;
use App\Http\Livewire\Pages\Dashboard;
use App\Http\Livewire\Pages\Login;
use App\Http\Livewire\Pages\Product\DetailProduct;
use App\Http\Livewire\Pages\Product\OrderProduct;
use App\Http\Livewire\Pages\Product\ListProduct;
use App\Http\Livewire\Pages\User;
use App\Http\Livewire\Pages\VerifikasiPayment;
use App\Models\Payment;
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


Route::group([
    'prefix' => '/',
    'middleware' =>[], //['auth:staff', 'logging-web', 'twofa'],
    'as' => 'login'
], function () {
    Route::get('/', Login::class);
});

Route::get('/logout', LogoutController::class)->name('logout');

Route::group([
    'prefix' => '/dashboard',
    'middleware' =>['auth:web'], //['auth:staff', 'logging-web', 'twofa'],
    'as' => 'dashboard'
], function () {
    Route::get('/', Dashboard::class);
});

Route::group([
    'prefix' => '/admin',
    'middleware' =>['auth:web'], //['auth:staff', 'logging-web', 'twofa'],
    'as' => 'admin'
], function () {
    Route::get('/user', User::class);
});

Route::group([
    'prefix' => '/kwitansi-team',
    'middleware' =>['auth:web'], //['auth:staff', 'logging-web', 'twofa'],
    'as' => 'kwitansi-team'
], function () {
    Route::get('/verifikasi-payment', VerifikasiPayment::class);
});

Route::group([
    'prefix' => '/product',
    'middleware' =>['auth:web'], //['auth:staff', 'logging-web', 'twofa'],
    'as' => 'product'
], function () {
    Route::get('/', Dashboard::class);
    Route::get('/order', OrderProduct::class)->name('.order')->name('order');
    Route::get('/list', ListProduct::class)->name('.list');
    Route::get('/detail', DetailProduct::class)->name('.detail');
});
