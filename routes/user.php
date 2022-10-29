<?php

use App\Http\Controllers\AddPaymentController;
use App\Http\Controllers\AuthorizePaymentController;
use App\Http\Controllers\PaystackController;
use App\Http\Controllers\PayTMController;
use App\Http\Controllers\RazorpayController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'user', 'as' => 'user.', 'middleware' => ['auth', 'xss'],
], function () {
    Route::get('dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
    Route::resource('deposit-transaction', AddPaymentController::class);
    Route::get('deposit-amount/{id}', [AddPaymentController::class, 'show'])->name('get-deposit-amount');
    Route::post('add-payment',
        [StripePaymentController::class, 'addPayment'])->name('add-payment');
    Route::resource('users', UserController::class);
    Route::get('payment-success', [StripePaymentController::class, 'paymentSuccess'])->name('payment-success');
    Route::get('failed-payment', [StripePaymentController::class, 'handleFailedPayment'])->name('failed-payment');

    Route::get('/profile/edit', [UserController::class, 'editProfile'])->name('profile.setting');
    Route::put('/profile/update', [UserController::class, 'updateProfile'])->name('update.profile.setting');


    //razorpay
    Route::post('razorpay-onboard', [RazorpayController::class, 'onBoard'])->name('razorpay.init');
    Route::post('razorpay-payment-success', [RazorpayController::class, 'paymentSuccess'])
        ->name('razorpay.success');
    Route::post('razorpay-payment-failed', [RazorpayController::class, 'paymentFailed'])
        ->name('razorpay.failed');
    Route::get('razorpay-payment-webhook', [RazorpayController::class, 'paymentSuccessWebHook'])
        ->name('razorpay.webhook');

//paytm


    Route::get('twofactor-auth', [UserController::class, 'twoFactorAuth'])->name('twofactor.auth');
    Route::get('twofactor-auth-enable', [UserController::class, 'twoFactorAuthEnable'])->name('twofactor.auth.enable');
    Route::post('twofactor-auth-disable',
        [UserController::class, 'twoFactorAuthDisable'])->name('twofactor.auth.disable');

    //Authorize
    Route::get('authorize-onboard', [AuthorizePaymentController::class, 'onboard'])->name('authorize.init');
    Route::post('authorize-do-payment', [AuthorizePaymentController::class, 'pay'])->name('authorize.onboard');
    Route::get('authorize-payment-failed', [AuthorizePaymentController::class, 'failed'])->name('authorize.failed');

    //paystack
    Route::get('paystack-onboard', [PaystackController::class, 'redirectToGateway'])->name('paystack.init');
    Route::get('paystack-payment-success',
        [PaystackController::class, 'handleGatewayCallback'])->name('paystack.success');

});
Route::get('2fa-validate', [AuthenticatedSessionController::class, 'twoAuthValidate'])->name('user.2fa.validate.otp');
Route::post('/2fa/validate', [
    AuthenticatedSessionController::class, 'postValidateToken',
])->middleware('throttle')->name('user.token.validation');
Route::get('/paytm-init', [PayTMController::class, 'initiate'])->name('paytm.init');
Route::post('/paytm-payment', [PayTMController::class, 'payment'])->name('make.payment');
Route::post('/paytm-callback', [PayTMController::class, 'paymentCallback'])->name('paytm.callback');
Route::get('paytm-payment-cancel', [PayTMController::class, 'failed'])->name('paytm.failed');
?>
