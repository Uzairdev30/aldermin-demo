<?php

use Illuminate\Support\Facades\Route;
use Modules\Gradebook\Http\Controllers\GradebookController;
use Modules\Gradebook\Http\Controllers\SubjectImport\ScoreImportController;
use Modules\Gradebook\Http\Controllers\ManageTranscript\TranscriptController;
use Modules\Gradebook\Http\Controllers\SubjectImport\SubjectImportController;
use Modules\Gradebook\Http\Controllers\SubjectImport\ViewImportDataController;
use Modules\Gradebook\Http\Controllers\GradebookReport\StudentReportController;
use Modules\Gradebook\Http\Controllers\GradebookReport\SubjectReportController;
use Modules\Gradebook\Http\Controllers\ManageTranscript\BulkDownloadController;
use Modules\Gradebook\Http\Controllers\ExamManagement\ManageAcademicYearController;
use Modules\Gradebook\Http\Controllers\GradebookReport\ConsolidatedReportController;
use Modules\Gradebook\Http\Controllers\GenerateTranscript\ManageTranscirptController;
use Modules\Gradebook\Http\Controllers\ManageTranscript\GenerateTranscriptController;
use Modules\Gradebook\Http\Controllers\ManageTranscript\TranscriptTemplateController;
use Modules\Gradebook\Http\Controllers\GeneratedTranscriptReport\GeneratedTranscriptReportController;

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

Route::group([], function () {
    Route::resource('gradebook', GradebookController::class)->names('gradebook');
});


Route::group([], function () {
    Route::resource('grade-book/back-data-import/subject-import', SubjectImportController::class)
        ->names([
            'index' => 'saas.grade-book.back-data-import.subject-import.index',
            'create' => 'saas.grade-book.back-data-import.subject-import.create',
            'store' => 'saas.grade-book.back-data-import.subject-import.store',
            'show' => 'saas.grade-book.back-data-import.subject-import.show',
            'edit' => 'saas.grade-book.back-data-import.subject-import.edit',
            'update' => 'saas.grade-book.back-data-import.subject-import.update',
            'destroy' => 'saas.grade-book.back-data-import.subject-import.destroy'
        ]);
});

Route::get('grade-book/back-data-import/subject-import-logs', [SubjectImportController::class, 'subjectImportLogs'])->name('saas.grade-book.back-data-import.subject-import.logs');

Route::group([], function () {
    Route::resource('grade-book/back-data-import/score-import', ScoreImportController::class)
        ->names([
            'index' => 'saas.grade-book.back-data-import.score-import.index',
            'create' => 'saas.grade-book.back-data-import.score-import.create',
            'store' => 'saas.grade-book.back-data-import.score-import.store',
            'show' => 'saas.grade-book.back-data-import.score-import.show',
            'edit' => 'saas.grade-book.back-data-import.score-import.edit',
            'update' => 'saas.grade-book.back-data-import.score-import.update',
            'destroy' => 'saas.grade-book.back-data-import.score-import.destroy'
        ]);
});

Route::get('grade-book/back-data-import/score-import-logs', [ScoreImportController::class, 'scoreImportLogs'])->name('saas.grade-book.back-data-import.score-import.logs');


Route::group([], function () {
    Route::resource('grade-book/back-data-import/view-import-data', ViewImportDataController::class)
        ->names([
            'index' => 'saas.grade-book.back-data-import.view-import-data.index',
            'create' => 'saas.grade-book.back-data-import.view-import-data.create',
            'store' => 'saas.grade-book.back-data-import.view-import-data.store',
            'show' => 'saas.grade-book.back-data-import.view-import-data.show',
            'edit' => 'saas.grade-book.back-data-import.view-import-data.edit',
            'update' => 'saas.grade-book.back-data-import.view-import-data.update',
            'destroy' => 'saas.grade-book.back-data-import.view-import-data.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('grade-book/exam-management/manage-academic-year', ManageAcademicYearController::class)
        ->names([
            'index' => 'saas.grade-book.exam-management.manage-academic-year.index',
            'create' => 'saas.grade-book.exam-management.manage-academic-year.create',
            'store' => 'saas.grade-book.exam-management.manage-academic-year.store',
            'show' => 'saas.grade-book.exam-management.manage-academic-year.show',
            'edit' => 'saas.grade-book.exam-management.manage-academic-year.edit',
            'update' => 'saas.grade-book.exam-management.manage-academic-year.update',
            'destroy' => 'saas.grade-book.exam-management.manage-academic-year.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('grade-book/exam-year-planner/manage-academic-year', ManageAcademicYearController::class)
        ->names([
            'index' => 'saas.grade-book.exam-year-planner.manage-academic-year.index',
            'create' => 'saas.grade-book.exam-year-planner.manage-academic-year.create',
            'store' => 'saas.grade-book.exam-year-planner.manage-academic-year.store',
            'show' => 'saas.grade-book.exam-year-planner.manage-academic-year.show',
            'edit' => 'saas.grade-book.exam-year-planner.manage-academic-year.edit',
            'update' => 'saas.grade-book.exam-year-planner.manage-academic-year.update',
            'destroy' => 'saas.grade-book.exam-year-planner.manage-academic-year.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('grade-book/generate-transcript/manage-transcript', ManageTranscirptController::class)
        ->names([
            'index' => 'saas.grade-book.generate-transcript.manage-transcript.index',
            'create' => 'saas.grade-book.generate-transcript.manage-transcript.create',
            'store' => 'saas.grade-book.generate-transcript.manage-transcript.store',
            'show' => 'saas.grade-book.generate-transcript.manage-transcript.show',
            'edit' => 'saas.grade-book.generate-transcript.manage-transcript.edit',
            'update' => 'saas.grade-book.generate-transcript.manage-transcript.update',
            'destroy' => 'saas.grade-book.generate-transcript.manage-transcript.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('grade-book/generate-transcript-report', GeneratedTranscriptReportController::class)
        ->names([
            'index' => 'saas.grade-book.generate-transcript-report.index',
            'create' => 'saas.grade-book.generate-transcript-report.create',
            'store' => 'saas.grade-book.generate-transcript-report.store',
            'show' => 'saas.grade-book.generate-transcript-report.show',
            'edit' => 'saas.grade-book.generate-transcript-report.edit',
            'update' => 'saas.grade-book.generate-transcript-report.update',
            'destroy' => 'saas.grade-book.generate-transcript-report.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('grade-book/student-report/academic-year', StudentReportController::class)
        ->names([
            'index' => 'saas.grade-book.student-report.academic-year.index',
            'create' => 'saas.grade-book.student-report.academic-year.create',
            'store' => 'saas.grade-book.student-report.academic-year.store',
            'show' => 'saas.grade-book.student-report.academic-year.show',
            'edit' => 'saas.grade-book.student-report.academic-year.edit',
            'update' => 'saas.grade-book.student-report.academic-year.update',
            'destroy' => 'saas.grade-book.student-report.academic-year.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('grade-book/subject-report/academic-year', SubjectReportController::class)
        ->names([
            'index' => 'saas.grade-book.subject-report.academic-year.index',
            'create' => 'saas.grade-book.subject-report.academic-year.create',
            'store' => 'saas.grade-book.subject-report.academic-year.store',
            'show' => 'saas.grade-book.subject-report.academic-year.show',
            'edit' => 'saas.grade-book.subject-report.academic-year.edit',
            'update' => 'saas.grade-book.subject-report.academic-year.update',
            'destroy' => 'saas.grade-book.subject-report.academic-year.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('grade-book/consolidated-report/academic-year', ConsolidatedReportController::class)
        ->names([
            'index' => 'saas.grade-book.consolidated-report.academic-year.index',
            'create' => 'saas.grade-book.consolidated-report.academic-year.create',
            'store' => 'saas.grade-book.consolidated-report.academic-year.store',
            'show' => 'saas.grade-book.consolidated-report.academic-year.show',
            'edit' => 'saas.grade-book.consolidated-report.academic-year.edit',
            'update' => 'saas.grade-book.consolidated-report.academic-year.update',
            'destroy' => 'saas.grade-book.consolidated-report.academic-year.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('grade-book/manage-transcript', TranscriptController::class)
        ->names([
            'index' => 'saas.grade-book.manage-transcript.index',
            'create' => 'saas.grade-book.manage-transcript.create',
            'store' => 'saas.grade-book.manage-transcript.store',
            'show' => 'saas.grade-book.manage-transcript.show',
            'edit' => 'saas.grade-book.manage-transcript.edit',
            'update' => 'saas.grade-book.manage-transcript.update',
            'destroy' => 'saas.grade-book.manage-transcript.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('grade-book/manage-transcript-template', TranscriptTemplateController::class)
        ->names([
            'index' => 'saas.grade-book.manage-transcript-template.index',
            'create' => 'saas.grade-book.manage-transcript-template.create',
            'store' => 'saas.grade-book.manage-transcript-template.store',
            'show' => 'saas.grade-book.manage-transcript-template.show',
            'edit' => 'saas.grade-book.manage-transcript-template.edit',
            'update' => 'saas.grade-book.manage-transcript-template.update',
            'destroy' => 'saas.grade-book.manage-transcript-template.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('grade-book/generate-transcript', GenerateTranscriptController::class)
        ->names([
            'index' => 'saas.grade-book.generate-transcript.index',
            'create' => 'saas.grade-book.generate-transcript.create',
            'store' => 'saas.grade-book.generate-transcript.store',
            'show' => 'saas.grade-book.generate-transcript.show',
            'edit' => 'saas.grade-book.generate-transcript.edit',
            'update' => 'saas.grade-book.generate-transcript.update',
            'destroy' => 'saas.grade-book.generate-transcript.destroy'
        ]);
});

Route::group([], function () {
    Route::resource('grade-book/bulk-download', BulkDownloadController::class)
        ->names([
            'index' => 'saas.grade-book.bulk-download.index',
            'create' => 'saas.grade-book.bulk-download.create',
            'store' => 'saas.grade-book.bulk-download.store',
            'show' => 'saas.grade-book.bulk-download.show',
            'edit' => 'saas.grade-book.bulk-download.edit',
            'update' => 'saas.grade-book.bulk-download.update',
            'destroy' => 'saas.grade-book.bulk-download.destroy'
        ]);
});


