<?php

namespace Modules\Setting\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Setting\Models\AcademicYear;

class AcademicYearController extends Controller
{
    public function index()
    {
        $data['academicYears'] = AcademicYear::get();
        return view('setting::academic_year')->with($data);
    }

    public function create()
    {
        return view('setting::create');
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'academic_year_name' => 'required|string|max:30',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ], [
            'academic_year_name.required' => 'Academic Year is required',
            'start_date.required' => 'Start date is required',
            'end_date.required' => 'End date is required'
        ]);
    
        AcademicYear::create([
            'academic_year_name' => $validated_data['academic_year_name'],
            'start_date' => $validated_data['start_date'],
            'end_date' => $validated_data['end_date'],
            'is_current_year' => 0,
            'active' => 1,
            'branch_id' => 1,
        ]);
    
        return redirect()->route('sass.setting.academic-year.index')->with('success', 'Academic year created successfully!');
    }

    public function show($id)
    {
        return view('setting::show');
    }

    public function edit($id)
    {
        $data['academicYears'] = AcademicYear::get();
        $data['academic_years'] = AcademicYear::find($id);

        return view('setting::academic_year-edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $validated_data = $request->validate([
            'academic_year_name' => 'required|string|max:30',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ], [
            'academic_year_name.required' => 'Academic Year is required',
            'start_date.required' => 'Start date is required',
            'end_date.required' => 'End date is required'
        ]);

        try {
            $academicYear = AcademicYear::findOrFail($id);

            AcademicYear::where('id', '!=', $id)->update(['is_current_year' => 0]); 
            $academicYear->is_current_year = 1;

            $academicYear->update([
                'academic_year_name' => $validated_data['academic_year_name'],
                'start_date' => $validated_data['start_date'],
                'end_date' => $validated_data['end_date'],
                'active' => 1, 
                'branch_id' => 1,
            ]);

            return redirect()->route('sass.setting.academic-year.index')->with('success', 'Academic year updated successfully!');
        } catch (\Exception $e) {
            return redirect()->route('sass.setting.academic-year.index')->with('error', 'Something went wrong while updating the academic year.');
        }
    }


    public function destroy($id)
    {
        try {
            $academicYear = AcademicYear::findOrFail($id);

            $academicYear->delete();

            return redirect()->route('sass.setting.academic-year.index')->with('success', 'Academic year deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->route('sass.setting.academic-year.index')->with('error', 'Something went wrong while deleting the academic year.');
        }
    }
    
}
