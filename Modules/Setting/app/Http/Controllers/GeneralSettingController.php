<?php

namespace Modules\Setting\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Setting\Models\Language;
use Modules\Setting\Models\Timezone;
use Modules\Setting\Models\GeneralSetting;
use Modules\Setting\Models\SettingCountryTable;

class GeneralSettingController extends Controller
{

    public function index()
    {
        $data['generalSettings'] = GeneralSetting::get();
        $data['languages'] = Language::get();
        $data['timeZones'] = Timezone::get();
        $data['Countries'] = SettingCountryTable::get();

        return view('setting::general_setting')->with($data);
    }

    public function create()
    {
        return view('setting::create');
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'school_name' => 'required|string|max:50',
            'school_address' => 'nullable|string|max:200',
            'school_phone' => 'nullable|string|max:20',
            'school_email' => 'nullable|email|max:50',
            'school_website' => 'nullable|url|max:200',
            'institution_type' => 'required|string|max:30',
            'attendance_type' => 'required|string|max:30',
            'start_day_of_week' => 'required|string|max:15',
            'date_format' => 'required|string|max:20',
            'date_separator' => 'required|string|max:10',
            'language_id' => 'required|numeric',
            'timeZone_id' => 'required|numeric',
            'country_id' => 'required|numeric',
            'currency_code_id' => 'required|numeric',
            'currency_symbol' => 'required|string|max:10',
            'precision_count' => 'required|integer',
            'logo_file_path' => 'nullable|file|mimes:jpg,jpeg,png,doc,docx,pdf,txt',
            'theme' => 'nullable|string|max:200',
            'font_family' => 'nullable|string|max:200',
            'bg_img_for_login' => 'nullable|file|mimes:jpg,jpeg,png,doc,docx,pdf,txt',
            'default_sorting_order_for_app' => 'nullable|string|max:100',
        ]);

        $logoPath = null;
        if ($request->hasFile('logo_file_path')) {
            $logoPath = $request->file('logo_file_path')->store('logos', 'public');
        }

        $bgImgPath = null;
        if ($request->hasFile('bg_img_for_login')) {
            $bgImgPath = $request->file('bg_img_for_login')->store('login_backgrounds', 'public');
        }

        GeneralSetting::create([
            'school_name' => $validated_data['school_name'],
            'school_address' => $validated_data['school_address'] ?? null,
            'school_phone' => $validated_data['school_phone'] ?? null,
            'school_email' => $validated_data['school_email'] ?? null,
            'school_website' => $validated_data['school_website'] ?? null,
            'institution_type' => $validated_data['institution_type'],
            'attendance_type' => $validated_data['attendance_type'],
            'start_day_of_week' => $validated_data['start_day_of_week'],
            'date_format' => $validated_data['date_format'],
            'date_separator' => $validated_data['date_separator'],
            'language_id' => $validated_data['language_id'],
            'timezone_id' => $validated_data['timeZone_id'], 
            'country_id' => $validated_data['country_id'],   
            'currency_code_id' => $validated_data['currency_code_id'],
            'currency_symbol' => $validated_data['currency_symbol'],
            'precision_count' => $validated_data['precision_count'],
            'logo_file_path' => $logoPath,
            'theme' => $validated_data['theme'] ?? null,
            'font_family' => $validated_data['font_family'] ?? null,
            'bg_img_for_login' => $bgImgPath,
            'default_sorting_order_for_app' => $validated_data['default_sorting_order_for_app'] ?? null,

            'enable_auto_increment_admission_no' => $request->has('enable_auto_increment_admission_no') ? 1 : 0,
            'enable_news_comment_moderation' => $request->has('enable_news_comment_moderation') ? 1 : 0,
            'enable_sibling' => $request->has('enable_sibling') ? 1 : 0,
            'enable_password_change_at_first_login' => $request->has('enable_password_change_at_first_login') ? 1 : 0,
            'enable_roll_no_for_students' => $request->has('enable_roll_no_for_students') ? 1 : 0,
            'enable_google_sso' => $request->has('enable_google_sso') ? 1 : 0,
            'enable_auto_logout' => $request->has('enable_auto_logout') ? 1 : 0,
            'enable_program' => $request->has('enable_program') ? 1 : 0,

            'is_expired' => 0,
            'is_active' => 1,
        ]);

        return redirect()->route('sass.setting.general-setting.index')->with('success', 'General Setting created successfully!');
    }

    public function show($id)
    {
        return view('setting::show');
    }

    public function edit($id)
    {
        $data['generalSettings'] = GeneralSetting::get();
        $data['languages'] = Language::get();
        $data['timeZones'] = Timezone::get();
        $data['Countries'] = SettingCountryTable::get();

        return view('setting::general_setting-edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
