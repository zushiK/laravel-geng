<?php

use App\Http\Controllers\Operator\MailTemplateController;
use App\Http\Controllers\Operator\ShikakuController;
use App\Http\Controllers\Operator\TradeLawController;
use App\Http\Controllers\Operator\ZeiritsuController;
use App\Http\Controllers\Operator\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Operator\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Operator\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Operator\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Operator\Auth\NewPasswordController;
use App\Http\Controllers\Operator\Auth\PasswordResetLinkController;
use App\Http\Controllers\Operator\Auth\RegisteredUserController;
use App\Http\Controllers\Operator\Auth\VerifyEmailController;
use App\Http\Controllers\Operator\HomeController;
use App\Http\Controllers\Operator\ShopMasterController;
use App\Models\Operator;
use Illuminate\Support\Facades\Route;

// ログイン処理
Route::controller(AuthenticatedSessionController::class)->group(
    function () {
        Route::get('login', 'create')->name('login');
        Route::post('login', 'store');
    }
);


Route::middleware('auth:operator')->group(function () {
    Route::get('/pref', [HomeController::class, 'pref'])->name('pref');
    Route::get('/prefname/{prefname}', [HomeController::class, 'prefname'])->name('prefname');
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    Route::controller(ShikakuController::class)->prefix('shikaku')->group(
        function () {
            Route::get('/', 'index')->name('shikaku'); //一覧画面
            Route::get('/create', 'create')->name('shikaku.create'); //新規作成画面
            Route::post('/store', 'store')->name('shikaku.store'); //新規作成実行
            Route::get('/edit/{id}', 'edit')->name('shikaku.edit'); //編集画面
            Route::post('/update/{id}', 'update')->name('shikaku.update'); //編集実行
            Route::delete('/delete/{id}', 'destroy')->name('shikaku.delete'); //削除実行
        }
    );
    Route::controller(ZeiritsuController::class)->prefix('zeiritsu')->group(
        function () {
            Route::get('/', 'index')->name('zeiritsu'); //一覧画面
            Route::get('/create', 'create')->name('zeiritsu.create'); //新規作成画面
            Route::post('/store', 'store')->name('zeiritsu.store'); //新規作成実行
            Route::get('/edit/{id}', 'edit')->name('zeiritsu.edit'); //編集画面
            Route::post('/update/{id}', 'update')->name('zeiritsu.update'); //編集実行
            Route::delete('/delete/{id}', 'destroy')->name('zeiritsu.delete'); //削除実行
        }
    );
    Route::controller(ShopMasterController::class)->prefix('shop-master')->group(
        function () {
            Route::get('/', 'edit')->name('shop-master');
            Route::post('/update', 'update')->name('shop-master.update'); //編集実行
            Route::delete('/delete/{id}', 'destroy')->name('shop-master.delete'); //削除実行
        }
    );
    Route::controller(TradeLawController::class)->prefix('tradelaw')->group(
        function () {
            Route::get('/', 'edit')->name('tradelaw.edit'); //編集画面
            Route::post('/update', 'update')->name('tradelaw.update'); //編集実行
        }
    );
    Route::controller(MailTemplateController::class)->prefix('mailtemplate')->group(
        function () {
            Route::get('/', 'index')->name('mailtemplate'); //一覧画面
            Route::get('/create', 'create')->name('mailtemplate.create'); //新規作成画面
            Route::post('/store', 'store')->name('mailtemplate.store'); //新規作成実行
            Route::get('/edit/{id}', 'edit')->name('mailtemplate.edit'); //編集画面
            Route::post('/update/{id}', 'update')->name('mailtemplate.update'); //編集実行
            Route::delete('/delete/{id}', 'destroy')->name('mailtemplate.delete'); //削除実行
        }
    );
});
Route::get('register', [RegisteredUserController::class, 'create'])
->name('register');

Route::post('register', [RegisteredUserController::class, 'store']);


// Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
// ->name('password.request');

// Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
// ->name('password.email');

// Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
// ->name('password.reset');

// Route::post('reset-password', [NewPasswordController::class, 'store'])
// ->name('password.update');


// Route::middleware('auth')->group(function () {
//     Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
//                 ->name('verification.notice');

//     Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
//                 ->middleware(['signed', 'throttle:6,1'])
//                 ->name('verification.verify');

//     Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
//                 ->middleware('throttle:6,1')
//                 ->name('verification.send');

//     Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
//                 ->name('password.confirm');

//     Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
// });
