<?php

use Illuminate\Support\Facades\Route;
use Modules\Applicants\Http\Controllers\SettingController;
use Modules\Applicants\Http\Controllers\ApplicantsController;
use Modules\Applicants\Http\Controllers\EnquiryYearController;
use Modules\Applicants\Http\Controllers\FormSettingController;
use Modules\Applicants\Http\Controllers\SourceReportController;
use Modules\Applicants\Http\Controllers\EnquirySettingController;
use Modules\Applicants\Http\Controllers\CounselorReportController;
use Modules\Applicants\Http\Controllers\CourceWiseReportController;
use Modules\Applicants\Http\Controllers\ApplicantRegistration\PinGroupController;
use Modules\Applicants\Http\Controllers\ApplicantRegistration\CourseApplicantController;
use Modules\Applicants\Http\Controllers\ApplicantRegistration\ActiveYearCourseController;
use Modules\Applicants\Http\Controllers\ApplicantRegistration\PreviewApplicantController;
use Modules\Applicants\Http\Controllers\ApplicantRegistration\CourseRegistrationController;
use Modules\Applicants\Http\Controllers\ApplicantRegistration\NotificationSettingController;
use Modules\Applicants\Http\Controllers\ApplicantRegistration\AddApplicantRegistrationController;
use Modules\Applicants\Http\Controllers\ApplicantRegistration\RegistrationCourseSettingController;

/*
|-------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::group([], function () {
//     Route::resource('applicants/enquiry-list', ApplicantsController::class)->names('saas.applicants.enquiry-list');
//     Route::get('applicants/enquiry-form', [ApplicantsController::class, 'create'])->name('saas.applicants.enquiry-form');
// });

Route::group([], function () {
    Route::resource('applicants/enquiries', ApplicantsController::class)
        ->names([
            'index' => 'saas.applicants.enquiries.index',
            'create' => 'saas.applicants.enquiries.create',
            'store' => 'saas.applicants.enquiries.store',
            'show' => 'saas.applicants.enquiries.show',
            'edit' => 'saas.applicants.enquiries.edit',
            'update' => 'saas.applicants.enquiries.update',
            'destroy' => 'saas.applicants.enquiries.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('applicant/reports-counselor', CounselorReportController::class)
        ->names([
            'index' => 'sass.applicant.reports-counselor.index',
            'create' => 'sass.applicant.reports-counselor.create',
            'store' => 'sass.applicant.reports-counselor.store',
            'show' => 'sass.applicant.reports-counselor.show',
            'edit' => 'sass.applicant.reports-counselor.edit',
            'update' => 'sass.applicant.reports-counselor.update',
            'destroy' => 'sass.applicant.reports-counselor.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('applicant/reports-source', SourceReportController::class)
        ->names([
            'index' => 'sass.applicant.reports-source.index',
            'create' => 'sass.applicant.reports-source.create',
            'store' => 'sass.applicant.reports-source.store',
            'show' => 'sass.applicant.reports-source.show',
            'edit' => 'sass.applicant.reports-source.edit',
            'update' => 'sass.applicant.reports-source.update',
            'destroy' => 'sass.applicant.reports-source.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('applicant/reports-cource-wise', CourceWiseReportController::class)
        ->names([
            'index' => 'sass.applicant.reports-cource-wise.index',
            'create' => 'sass.applicant.reports-cource-wise.create',
            'store' => 'sass.applicant.reports-cource-wise.store',
            'show' => 'sass.applicant.reports-cource-wise.show',
            'edit' => 'sass.applicant.reports-cource-wise.edit',
            'update' => 'sass.applicant.reports-cource-wise.update',
            'destroy' => 'sass.applicant.reports-cource-wise.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('applicant/setting-enquiry-setting', EnquirySettingController::class)
        ->names([
            'index' => 'sass.applicant.setting.enquiry-setting.index',
            'create' => 'sass.applicant.setting.enquiry-setting.create',
            'store' => 'sass.applicant.setting.enquiry-setting.store',
            'show' => 'sass.applicant.setting.enquiry-setting.show',
            'edit' => 'sass.applicant.setting.enquiry-setting.edit',
            'update' => 'sass.applicant.setting.enquiry-setting.update',
            'destroy' => 'sass.applicant.setting.enquiry-setting.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('applicant/setting-enquiry-year', EnquiryYearController::class)
        ->names([
            'index' => 'sass.applicant.setting.enquiry-year.index',
            'create' => 'sass.applicant.setting.enquiry-year.create',
            'store' => 'sass.applicant.setting.enquiry-year.store',
            'show' => 'sass.applicant.setting.enquiry-year.show',
            'edit' => 'sass.applicant.setting.enquiry-year.edit',
            'update' => 'sass.applicant.setting.enquiry-year.update',
            'destroy' => 'sass.applicant.setting.enquiry-year.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('applicant/setting-form-setting', FormSettingController::class)
        ->names([
            'index' => 'sass.applicant.setting.form-setting.index',
            'create' => 'sass.applicant.setting.form-setting.create',
            'store' => 'sass.applicant.setting.form-setting.store',
            'show' => 'sass.applicant.setting.form-setting.show',
            'edit' => 'sass.applicant.setting.form-setting.edit',
            'update' => 'sass.applicant.setting.form-setting.update',
            'destroy' => 'sass.applicant.setting.form-setting.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('applicant/course-applicant', CourseApplicantController::class)
        ->names([
            'index' => 'sass.applicant.course-applicant.index',
            'create' => 'sass.applicant.course-applicant.create',
            'store' => 'sass.applicant.course-applicant.store',
            'show' => 'sass.applicant.course-applicant.show',
            'edit' => 'sass.applicant.course-applicant.edit',
            'update' => 'sass.applicant.course-applicant.update',
            'destroy' => 'sass.applicant.course-applicant.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('applicant/add-applicant-registration', AddApplicantRegistrationController::class)
        ->names([
            'index' => 'sass.add-applicant-registration.index',
            'create' => 'sass.add-applicant-registration.create',
            'store' => 'sass.add-applicant-registration.store',
            'show' => 'sass.add-applicant-registration.show',
            'edit' => 'sass.add-applicant-registration.edit',
            'update' => 'sass.add-applicant-registration.update',
            'destroy' => 'sass.add-applicant-registration.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('applicant/course-registration', CourseRegistrationController::class)
        ->names([
            'index' => 'sass.course-registration.index',
            'create' => 'sass.course-registration.create',
            'store' => 'sass.course-registration.store',
            'show' => 'sass.course-registration.show',
            'edit' => 'sass.course-registration.edit',
            'update' => 'sass.course-registration.update',
            'destroy' => 'sass.course-registration.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('applicant/pin-groups', PinGroupController::class)
        ->names([
            'index' => 'sass.pin-groups.index',
            'create' => 'sass.pin-groups.create',
            'store' => 'sass.pin-groups.store',
            'show' => 'sass.pin-groups.show',
            'edit' => 'sass.pin-groups.edit',
            'update' => 'sass.pin-groups.update',
            'destroy' => 'sass.pin-groups.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('applicant/active-year-course', ActiveYearCourseController::class)
        ->names([
            'index' => 'sass.active-year-course.index',
            'create' => 'sass.active-year-course.create',
            'store' => 'sass.active-year-course.store',
            'show' => 'sass.active-year-course.show',
            'edit' => 'sass.active-year-course.edit',
            'update' => 'sass.active-year-course.update',
            'destroy' => 'sass.active-year-course.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('applicant/notification-setting', NotificationSettingController::class)
        ->names([
            'index' => 'sass.notification-setting.index',
            'create' => 'sass.notification-setting.create',
            'store' => 'sass.notification-setting.store',
            'show' => 'sass.notification-setting.show',
            'edit' => 'sass.notification-setting.edit',
            'update' => 'sass.notification-setting.update',
            'destroy' => 'sass.notification-setting.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('applicant/registration-course-setting', RegistrationCourseSettingController::class)
        ->names([
            'index' => 'sass.registration-course-setting.index',
            'create' => 'sass.registration-course-setting.create',
            'store' => 'sass.registration-course-setting.store',
            'show' => 'sass.registration-course-setting.show',
            'edit' => 'sass.registration-course-setting.edit',
            'update' => 'sass.registration-course-setting.update',
            'destroy' => 'sass.registration-course-setting.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('applicant/preview-applicant-form', PreviewApplicantController::class)
        ->names([
            'index' => 'sass.preview-applicant-form.index',
            'create' => 'sass.preview-applicant-form.create',
            'store' => 'sass.preview-applicant-form.store',
            'show' => 'sass.preview-applicant-form.show',
            'edit' => 'sass.preview-applicant-form.edit',
            'update' => 'sass.preview-applicant-form.update',
            'destroy' => 'sass.preview-applicant-form.destroy'
        ]);
});
