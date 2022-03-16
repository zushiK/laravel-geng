<?php

use App\Http\Controllers\Operator\MailTemplateController;
use App\Http\Controllers\Operator\ShikakuController;
use App\Http\Controllers\Operator\TradeLawController;
use App\Http\Controllers\Operator\ZeiritsuController;
use App\Http\Controllers\Operator\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Operator\HomeController;
use App\Http\Controllers\Operator\PointController;
use App\Http\Controllers\Operator\ShopMasterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Operator\OperatorController;
use App\Http\Controllers\Operator\ProductMasterController;

// ログイン処理
Route::controller(AuthenticatedSessionController::class)->group(
    function () {
        Route::get('login', 'create')->name('login');
        Route::post('login', 'store');
    }
);


Route::middleware('auth:operator')->group(function () {
    Route::get('/pref', [HomeController::class, 'pref'])->name('pref');
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    // 基本情報管理
    Route::prefix('basis')->group(function () {
        Route::controller(ShikakuController::class)->prefix('shikaku')->group(
            function () {
                Route::get('/', 'index')->name('shikaku'); //一覧画面
                Route::get('/create', 'create')->name('shikaku.create'); //新規作成画面
                Route::post('/store', 'store')->name('shikaku.store'); //新規作成実行
                Route::get('/edit/{id}', 'edit')->name('shikaku.edit'); //編集画面
                Route::post('/update/{id}', 'update')->name('shikaku.update'); //編集実行
                Route::delete('/delete/{id}', 'delete')->name('shikaku.delete'); //削除実行
            }
        );
        Route::controller(ZeiritsuController::class)->prefix('zeiritsu')->group(
            function () {
                Route::get('/', 'index')->name('zeiritsu'); //一覧画面
                Route::get('/create', 'create')->name('zeiritsu.create'); //新規作成画面
                Route::post('/store', 'store')->name('zeiritsu.store'); //新規作成実行
                Route::get('/edit/{id}', 'edit')->name('zeiritsu.edit'); //編集画面
                Route::post('/update/{id}', 'update')->name('zeiritsu.update'); //編集実行
                Route::delete('/delete/{id}', 'delete')->name('zeiritsu.delete'); //削除実行
            }
        );
        Route::controller(OperatorController::class)->prefix('operator')->group(
            function () {
                Route::get('/', 'index')->name('operator'); //一覧画面
                Route::get('/create', 'create')->name('operator.create'); //新規作成画面
                Route::post('/store', 'store')->name('operator.store'); //新規作成実行
                Route::get('/edit/{id}', 'edit')->name('operator.edit'); //編集画面
                Route::post('/update/{id}', 'update')->name('operator.update'); //編集実行
                Route::delete('/delete/{id}', 'delete')->name('operator.delete'); //削除実行
            }
        );
        Route::controller(ShopMasterController::class)->prefix('shop-master')->group(
            function () {
                Route::get('/', 'edit')->name('shop-master');
                Route::post('/update', 'update')->name('shop-master.update'); //編集実行
            }
        );
        Route::controller(TradeLawController::class)->prefix('tradelaw')->group(
            function () {
                Route::get('/', 'edit')->name('tradelaw'); //編集画面
                Route::post('/update', 'update')->name('tradelaw.update'); //編集実行
            }
        );
        Route::controller(MailTemplateController::class)->prefix('mailtemplate')->group(
            function () {
                Route::get('/', 'index')->name('mailtemplate'); //一覧画面
                Route::get('/edit/{id}', 'edit')->name('mailtemplate.edit'); //編集画面
                Route::post('/update/{id}', 'update')->name('mailtemplate.update'); //編集実行
            }
        );
        Route::controller(PointController::class)->prefix('point')->group(
            function () {
                Route::get('/', 'edit')->name('point'); //編集画面
                Route::post('/update', 'update')->name('point.update'); //編集実行
            }
        );
    });

    // 商品管理
    Route::prefix('product')->group(function () {
        Route::controller(ProductMasterController::class)->prefix('product_master')->group(
            function () {
                Route::get('/', 'index')->name('product'); //一覧画面
                Route::get('/create', 'create')->name('product.create'); //新規作成画面
                Route::post('/store', 'store')->name('product.store'); //新規作成実行
                Route::get('/edit/{id}', 'edit')->name('product.edit'); //編集画面
                Route::post('/update/{id}', 'update')->name('product.update'); //編集実行
                Route::delete('/delete/{id}', 'delete')->name('product.delete'); //削除実行
            }
        );
    });
    // 会員管理
    Route::prefix('customer')->group(function () {
        // some routes
    });
    // 受注管理
    Route::prefix('order')->group(function () {
        // some routes
    });
    // データ入出力
    Route::prefix('data')->group(function () {
        // some routes
    });
});
