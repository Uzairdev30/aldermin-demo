<?php

use Illuminate\Support\Facades\Route;
use Modules\Timetable\Http\Controllers\TimetableController;
use Modules\Timetable\Http\Controllers\Setting\SettingController;
use Modules\Timetable\Http\Controllers\SwapTimetable\SwapController;
use Modules\Timetable\Http\Controllers\CreateWeekday\WeekdayController;
use Modules\Timetable\Http\Controllers\ManageSubject\SkillSetController;
use Modules\Timetable\Http\Controllers\ManageSubject\LinkBatchController;
use Modules\Timetable\Http\Controllers\ManageSubject\SubjectListController;
use Modules\Timetable\Http\Controllers\WorkAlloment\WorkAllomentController;
use Modules\Timetable\Http\Controllers\ManageSubject\CourseSubjectController;
use Modules\Timetable\Http\Controllers\SwapTimetable\SwappedReportController;
use Modules\Timetable\Http\Controllers\ViewTimetable\ViewTimetableController;
use Modules\Timetable\Http\Controllers\ClassroomAllocation\AllocateController;
use Modules\Timetable\Http\Controllers\SetClassTiming\SetClassTimingController;
use Modules\Timetable\Http\Controllers\TeacherTimeTable\TeacherTimeTableController;
use Modules\Timetable\Http\Controllers\ClassroomAllocation\ManageBuildingController;
use Modules\Timetable\Http\Controllers\ManageTimetable\ManageTimetableListController;
use Modules\Timetable\Http\Controllers\InstitutionalTimetable\InstitutionalTimetableController;

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
//     Route::resource('timetable', TimetableController::class)->names('timetable');
// });


Route::group([], function () {
    Route::resource('classroom-allocation/manage-building', ManageBuildingController::class)
        ->names([
            'index' => 'saas.classroom-allocation.manage-building.index',
            'create' => 'saas.classroom-allocation.manage-building.create',
            'store' => 'saas.classroom-allocation.manage-building.store',
            'show' => 'saas.classroom-allocation.manage-building.show',
            'edit' => 'saas.classroom-allocation.manage-building.edit',
            'update' => 'saas.classroom-allocation.manage-building.update',
            'destroy' => 'saas.classroom-allocation.manage-building.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('classroom-allocation/allocate', AllocateController::class)
        ->names([
            'index' => 'saas.classroom-allocation.allocate.index',
            'create' => 'saas.classroom-allocation.allocate.create',
            'store' => 'saas.classroom-allocation.allocate.store',
            'show' => 'saas.classroom-allocation.allocate.show',
            'edit' => 'saas.classroom-allocation.allocate.edit',
            'update' => 'saas.classroom-allocation.allocate.update',
            'destroy' => 'saas.classroom-allocation.allocate.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('weekday', WeekdayController::class)
        ->names([
            'index' => 'saas.weekday.set-timing.index',
            'create' => 'saas.weekday.set-timing.create',
            'store' => 'saas.weekday.set-timing.store',
            'show' => 'saas.weekday.set-timing.show',
            'edit' => 'saas.weekday.set-timing.edit',
            'update' => 'saas.weekday.set-timing.update',
            'destroy' => 'saas.weekday.set-timing.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('manage-subject/list', SubjectListController::class)
        ->names([
            'index' => 'saas.manage-subject.list.index',
            'create' => 'saas.manage-subject.list.create',
            'store' => 'saas.manage-subject.list.store',
            'show' => 'saas.manage-subject.list.show',
            'edit' => 'saas.manage-subject.list.edit',
            'update' => 'saas.manage-subject.list.update',
            'destroy' => 'saas.manage-subject.list.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('manage-subject/Course-subject', CourseSubjectController::class)
        ->names([
            'index' => 'saas.manage-subject.Course-subject.index',
            'create' => 'saas.manage-subject.Course-subject.create',
            'store' => 'saas.manage-subject.Course-subject.store',
            'show' => 'saas.manage-subject.Course-subject.show',
            'edit' => 'saas.manage-subject.Course-subject.edit',
            'update' => 'saas.manage-subject.Course-subject.update',
            'destroy' => 'saas.manage-subject.Course-subject.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('manage-subject/skill-set', SkillSetController::class)
        ->names([
            'index' => 'saas.manage-subject.skill-set.index',
            'create' => 'saas.manage-subject.skill-set.create',
            'store' => 'saas.manage-subject.skill-set.store',
            'show' => 'saas.manage-subject.skill-set.show',
            'edit' => 'saas.manage-subject.skill-set.edit',
            'update' => 'saas.manage-subject.skill-set.update',
            'destroy' => 'saas.manage-subject.skill-set.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('manage-subject/link-batch', LinkBatchController::class)
        ->names([
            'index' => 'saas.manage-subject.link-batch.index',
            'create' => 'saas.manage-subject.link-batch.create',
            'store' => 'saas.manage-subject.link-batch.store',
            'show' => 'saas.manage-subject.link-batch.show',
            'edit' => 'saas.manage-subject.link-batch.edit',
            'update' => 'saas.manage-subject.link-batch.update',
            'destroy' => 'saas.manage-subject.link-batch.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('manage-timetable/list', ManageTimetableListController::class)
        ->names([
            'index' => 'saas.manage-timetable.list.index',
            'create' => 'saas.manage-timetable.list.create',
            'store' => 'saas.manage-timetable.list.store',
            'show' => 'saas.manage-timetable.list.show',
            'edit' => 'saas.manage-timetable.list.edit',
            'update' => 'saas.manage-timetable.list.update',
            'destroy' => 'saas.manage-timetable.list.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('set-class-timing', SetClassTimingController::class)
        ->names([
            'index' => 'saas.set-class-timing.index',
            'create' => 'saas.set-class-timing.create',
            'store' => 'saas.set-class-timing.store',
            'show' => 'saas.set-class-timing.show',
            'edit' => 'saas.set-class-timing.edit',
            'update' => 'saas.set-class-timing.update',
            'destroy' => 'saas.set-class-timing.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('teacher-timetable', TeacherTimeTableController::class)
        ->names([
            'index' => 'saas.teacher-timetable.index',
            'create' => 'saas.teacher-timetable.create',
            'store' => 'saas.teacher-timetable.store',
            'show' => 'saas.teacher-timetable.show',
            'edit' => 'saas.teacher-timetable.edit',
            'update' => 'saas.teacher-timetable.update',
            'destroy' => 'saas.teacher-timetable.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('timetable/setting', SettingController::class)
        ->names([
            'index' => 'saas.timetable.setting.index',
            'create' => 'saas.timetable.setting.create',
            'store' => 'saas.timetable.setting.store',
            'show' => 'saas.timetable.setting.show',
            'edit' => 'saas.timetable.setting.edit',
            'update' => 'saas.timetable.setting.update',
            'destroy' => 'saas.timetable.setting.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('timetable/swap', SwapController::class)
        ->names([
            'index' => 'saas.timetable.swap.index',
            'create' => 'saas.timetable.swap.create',
            'store' => 'saas.timetable.swap.store',
            'show' => 'saas.timetable.swap.show',
            'edit' => 'saas.timetable.swap.edit',
            'update' => 'saas.timetable.swap.update',
            'destroy' => 'saas.timetable.swap.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('timetable/swapped-report', SwappedReportController::class)
        ->names([
            'index' => 'saas.timetable.swapped-report.index',
            'create' => 'saas.timetable.swapped-report.create',
            'store' => 'saas.timetable.swapped-report.store',
            'show' => 'saas.timetable.swapped-report.show',
            'edit' => 'saas.timetable.swapped-report.edit',
            'update' => 'saas.timetable.swapped-report.update',
            'destroy' => 'saas.timetable.swapped-report.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('timetable/view-timetable', ViewTimetableController::class)
        ->names([
            'index' => 'saas.timetable.view-timetable.index',
            'create' => 'saas.timetable.view-timetable.create',
            'store' => 'saas.timetable.view-timetable.store',
            'show' => 'saas.timetable.view-timetable.show',
            'edit' => 'saas.timetable.view-timetable.edit',
            'update' => 'saas.timetable.view-timetable.update',
            'destroy' => 'saas.timetable.view-timetable.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('timetable/work-allotment', WorkAllomentController::class)
        ->names([
            'index' => 'saas.timetable.work-allotment.index',
            'create' => 'saas.timetable.work-allotment.create',
            'store' => 'saas.timetable.work-allotment.store',
            'show' => 'saas.timetable.work-allotment.show',
            'edit' => 'saas.timetable.work-allotment.edit',
            'update' => 'saas.timetable.work-allotment.update',
            'destroy' => 'saas.timetable.work-allotment.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('timetable/institutional-timetable', InstitutionalTimetableController::class)
        ->names([
            'index' => 'saas.timetable.institutional-timetable.index',
            'create' => 'saas.timetable.institutional-timetable.create',
            'store' => 'saas.timetable.institutional-timetable.store',
            'show' => 'saas.timetable.institutional-timetable.show',
            'edit' => 'saas.timetable.institutional-timetable.edit',
            'update' => 'saas.timetable.institutional-timetable.update',
            'destroy' => 'saas.timetable.institutional-timetable.destroy'
        ]);
});

