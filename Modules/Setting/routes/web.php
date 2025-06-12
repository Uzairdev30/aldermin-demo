<?php

use Illuminate\Support\Facades\Route;
use Modules\Setting\Http\Controllers\SettingController;
use Modules\Setting\Http\Controllers\AcademicYearController;
use Modules\Setting\Http\Controllers\GeneralSettingController;

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

// Route::group([], function () {
//     Route::resource('setting/academic-year', AcademicYearController::class)->names('sass.setting.academic-year');
// });


Route::group([], function () {
    Route::resource('setting/academic-year', AcademicYearController::class)
        ->names([
            'index' => 'sass.setting.academic-year.index',
            'create' => 'sass.setting.academic-year.create',
            'store' => 'sass.setting.academic-year.store',
            'show' => 'sass.setting.academic-year.show',
            'edit' => 'sass.setting.academic-year.edit',
            'update' => 'sass.setting.academic-year.update',
            'destroy' => 'sass.setting.academic-year.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('setting/general-setting', GeneralSettingController::class)
        ->names([
            'index' => 'sass.setting.general-setting.index',
            'create' => 'sass.setting.general-setting.create',
            'store' => 'sass.setting.general-setting.store',
            'show' => 'sass.setting.general-setting.show',
            'edit' => 'sass.setting.general-setting.edit',
            'update' => 'sass.setting.general-setting.update',
            'destroy' => 'sass.setting.general-setting.destroy'
        ]);
});