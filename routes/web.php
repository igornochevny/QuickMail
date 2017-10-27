<?php

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

Route::get('/', function () {
    return redirect()->route('template.index');
});

Auth::routes();

Route::resource('template', 'TemplateController');

Route::resource('bunch', 'BunchController');

Route::prefix('bunch/{bunch}')->group(
    function () {
        Route::resource('subscriber', 'SubscriberController');
    }
);

Route::resource('preview', 'PreviewController', ['only' => ['index']]);

Route::resource('campaign', 'CampaignController');

Route::prefix('campaign/{campaign}')->group(
    function () {
        Route::resource('preview', 'PreviewController');
    }
);

Route::prefix('campaign/{campaign}')->group(
    function () {
        Route::resource('send', 'SendController');
    }
);


