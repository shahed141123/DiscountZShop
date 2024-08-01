<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Frontend\HomeController;




Route::get('/', [HomeController::class, 'homePage'])->name('homePage');
Route::get('/about', [HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact', [HomeController::class, 'contactUs'])->name('contactUs');
Route::post('contact/store', [ContactController::class, 'store'])->name('contact.add');

Route::get('/offers/all', [HomeController::class, 'allOffer'])->name('allOffer');
Route::get('/offer/{slug}', [HomeController::class, 'offerDetails'])->name('offer.details');

Route::get('/brands/all', [HomeController::class, 'allBrand'])->name('allBrand');
Route::get('/brand/{slug}', [HomeController::class, 'brandDetails'])->name('brand.details');

Route::get('/coupon/all', [HomeController::class, 'allCoupon'])->name('allCoupon');
Route::get('/coupon/{slug}', [HomeController::class, 'couponDetails'])->name('coupon.details');

Route::get('/store/all', [HomeController::class, 'allStore'])->name('allStore');
Route::get('/store/{slug}', [HomeController::class, 'storeDetails'])->name('store.details');

Route::get('/terms-condition', [HomeController::class, 'termsCondition'])->name('termsCondition');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
