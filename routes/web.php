<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/' , [Controller::class, 'payment'])->name('stripe.index');
Route::get('checkout',[Controller::class , 'stripeCheckout'])->name('stripe.checkout');
Route::get('checkout/success',[ Controller::class,'stripeCheckoutSuccess'])->name('stripe.checkout.success');

