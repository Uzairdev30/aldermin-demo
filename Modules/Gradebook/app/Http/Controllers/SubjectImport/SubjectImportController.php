<?php

namespace Modules\Gradebook\Http\Controllers\SubjectImport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubjectImportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gradebook::back-data-import.subject-import');
    }

    public function subjectImportLogs()
    {
        return view('gradebook::back-data-import.subject-import-log');
    }

    public function create()
    {
        return view('gradebook::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('gradebook::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('gradebook::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
