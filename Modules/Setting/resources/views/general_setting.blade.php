@extends('layouts.app')

@section('title', 'General Settings')

@push('page-styles')

<!-- Select2 plugins css -->
<link href="{{ url('assets/node_modules/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="{{ asset('assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">

<!-- icheck -->
<link href="{{ url('assets/node_modules/icheck/skins/all.css') }}" rel="stylesheet">
<link href="{{ url('assets/dist/css/pages/form-icheck.css') }}" rel="stylesheet">

<!-- Date picker plugins css -->
<link href="{{ url('assets/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">

<!-- Data table styles -->
<link rel="stylesheet" type="text/css" href="{{ url('assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">

@endpush

@section('page-title-bread-crumb')
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">General Setting</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <!-- <li class="breadcrumb-item active">Blank Page1</li>
                <li class="breadcrumb-item active">Blank Page2</li>
                <li class="breadcrumb-item active">Blank Page3</li> -->
            </ol>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">Add General Settings</h4>
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <form method="POST" action="{{ route('sass.setting.general-setting.store')}}" enctype="multipart/form-data" novalidate style="background-color: #f0f0f0; padding: 20px; box-shadow: 0px 4px 8px rgba(0,0,0,0.1);">
                            @csrf
                            <div class="form-row">

                                <div class="col-md-12 mb-3">
                                    <label for="school_name">School/Collage Name</label> <span class="text-danger">*</span>
                                    <input type="text" class="form-control @error('school_name'){{ 'is-invalid' }}@enderror" name="school_name" placeholder="School Name" value="{{ old('school_name') }}" >
                                    @error('school_name')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="school_address">School/Collage Address</label>
                                    <input type="address" class="form-control @error('school_address'){{ 'is-invalid' }}@enderror" name="school_address" placeholder="School Address" value="{{ old('school_address') }}" >
                                    @error('school_address')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="school_phone">School/Collage Phone</label>
                                    <input type="phone" class="form-control @error('school_phone'){{ 'is-invalid' }}@enderror" name="school_phone" placeholder="School Phone" value="{{ old('school_phone') }}">
                                    @error('school_phone')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="school_email">School/Collage Email</label>
                                    <input type="" class="form-control @error('school_email'){{ 'is-invalid' }}@enderror" name="school_email" placeholder="School Email" value="{{ old('school_email') }}">
                                    @error('school_email')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="school_website">School/Collage Website</label>
                                    <input type="" class="form-control @error('school_website'){{ 'is-invalid' }}@enderror" name="school_website" placeholder="School Website" value="{{ old('school_website') }}">
                                    @error('school_website')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>
                                
                                <div class="col-md-12 mb-3">
                                    <label for="institution_type">Institution Type</label> <span class="text-danger">*</span>
                                    <select class="select2 form-control custom-select" name="institution_type" style="width: 100%; height:36px;">
                                        <option value="">Select</option>
                                        <option value="k_12">K-12</option>
                                        <option value="higher_education">Higher Education</option>
                                        <option value="vocational">Vocational/Technical</option>
                                        <option value="special_education">Special Education</option>
                                        <option value="online_school">Online School</option>
                                    </select>
                                    @error('institution_type')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="attendance_type">Student Attendance Type</label> <span class="text-danger">*</span>
                                    <select class="select2 form-control custom-select" name="attendance_type" style="width: 100%; height:36px;">
                                        <option value="">Select</option>
                                        <option value="daily">Daily</option>
                                        <option value="weekly">Weekly</option>
                                        <option value="monthly">Monthly</option>
                                    </select>
                                    @error('attendance_type')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="start_day_of_week">Start Day Of The Week</label> <span class="text-danger">*</span>
                                    <select class="select2 form-control custom-select" name="start_day_of_week" style="width: 100%; height:36px;">
                                        <option value="">Select</option>
                                        <option value="monday">Monday</option>
                                        <option value="tuesday">Tuesday</option>
                                        <option value="wednesday">Wednesday</option>
                                        <option value="thursday">Thursday</option>
                                        <option value="friday">Friday</option>
                                        <option value="saturday">Saturday</option>
                                        <option value="sunday">Sunday</option>
                                    </select>
                                    @error('start_day_of_week')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="date_format">Date Format</label> <span class="text-danger">*</span>
                                    <input type="text" class="form-control @error('date_format') is-invalid @enderror" name="date_format" id="date_format" placeholder="Date Format" value="{{ old('date_format') }}">
                                    @error('date_format')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="date_separator">Date Separator</label> <span class="text-danger">*</span>  
                                    <input type="text" class="form-control @error('date_separator') is-invalid @enderror" name="date_separator" id="date_separator" placeholder="Date Separator"value="{{ old('date_separator') }}">
                                    @error('date_separator')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="language_id">Language </label> <span class="text-danger">*</span>
                                    <select class="select2 form-control custom-select" name="language_id" style="width: 100%; height:36px;">
                                        <option value="">Select</option>
                                        @foreach($languages as $language)
                                        <option value="{{ $language->id }}" {{ (old('language_id') == $language->id) ? 'selected' : '' }}>{{ $language->language_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('language_id')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="timeZone_id">Time Zone </label> <span class="text-danger">*</span>
                                    <select class="select2 form-control custom-select" name="timeZone_id" style="width: 100%; height:36px;">
                                        <option value="">Select</option>
                                        @foreach($timeZones as $timeZone)
                                        <option value="{{ $timeZone->id }}" {{ (old('timeZone_id') == $timeZone->id) ? 'selected' : '' }}>{{ $timeZone->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('timeZone_id')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="country_id">Country</label> <span class="text-danger">*</span>
                                    <select class="select2 form-control custom-select" name="country_id" style="width: 100%; height:36px;">
                                        <option value="">Select</option>
                                        @foreach($Countries as $Country)
                                        <option value="{{ $Country->id }}" {{ (old('Country_id') == $Country->id) ? 'selected' : '' }}>{{ $Country->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('country_id')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="currency_code">Currency Code</label> 
                                    <select class="select2 form-control custom-select" name="currency_code_id" style="width: 100%; height:36px;">
                                        <option value="">Select</option>
                                        @foreach($Countries as $currencyCode)
                                        <option value="{{ $currencyCode->id }}" {{ (old('currencyCode') == $currencyCode->id) ? 'selected' : '' }}>{{ $currencyCode->code }}</option>
                                        @endforeach
                                    </select>
                                    @error('currency_code')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="currency_symbol">Currency Symbol</label> <span class="text-danger">*</span>
                                    <input type="text" class="form-control @error('currency_symbol') is-invalid @enderror" id="currency_symbol" name="currency_symbol" placeholder="Currency Symbol" value="{{ old('currency_symbol') }}">
                                    @error('currency_symbol')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="precision_count">Precision Count</label> <span class="text-danger">*</span>
                                    <input type="number" class="form-control @error('precision_count') is-invalid @enderror" id="precision_count" name="precision_count" placeholder="Precision Count" value="{{ old('precision_count') }}">
                                    @error('precision_count')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="logo_file_path">Upload Logo</label>
                                    <input type="file" class="form-control @error('logo_file_path') is-invalid @enderror" id="logo_file_path" name="logo_file_path">
                                    @error('logo_file_path')<div class="text-danger">{{ $message }}</div>@enderror
                                    <div class="text-info mt-2">(pdf, doc, docx, jpg, jpeg, png, txt are allowed.)</div>
                                </div>

                                <div class="col-md-3 mb-3 d-flex align-items-center">
                                    <label for="theme" class="mr-2 mb-0">Select Theme</label>
                                    <input type="color" class="form-control @error('theme') is-invalid @enderror" id="theme" name="theme" value="{{ old('theme') }}">
                                    @error('theme')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="font_family">Select Font</label>
                                    <select class="select2 form-control custom-select" name="font_family" style="width: 100%; height:36px;">
                                        <option value="">Select</option>
                                        <option value="Arial">Arial</option>
                                        <option value="Verdana">Verdana</option>
                                        <option value="Times New Roman">Times New Roman</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Courier New">Courier New</option>
                                        <option value="Roboto">Roboto</option>
                                        <option value="Open Sans">Open Sans</option>
                                        <option value="Lato">Lato</option>
                                    </select>
                                    @error('font_family')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="bg_img_for_login">Background image for login page</label>
                                    <input type="file" class="form-control @error('bg_img_for_login') is-invalid @enderror" id="bg_img_for_login" name="bg_img_for_login">
                                    @error('bg_img_for_login')<div class="text-danger">{{ $message }}</div>@enderror
                                    <div class="text-info mt-2">(pdf, doc, docx, jpg, jpeg, png, txt are allowed.)</div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="default_sorting_order_for_app">Default Sorting Order for Mobile App Attendance</label>
                                    <select class="select2 form-control custom-select" name="default_sorting_order_for_app" style="width: 100%; height:36px;">
                                        <option value="">Select</option>
                                        <option value="name_asc">Name (A-Z)</option>
                                        <option value="name_desc">Name (Z-A)</option>
                                        <option value="roll_number_asc">Roll Number (Low to High)</option>
                                        <option value="roll_number_desc">Roll Number (High to Low)</option>
                                        <option value="attendance_status">Attendance Status</option>
                                        <option value="class_section">Class & Section</option>
                                    </select>
                                    @error('default_sorting_order_for_app')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-group d-flex align-items-center">
                                            <ul class="icheck-list d-flex mb-0">
                                                <li class="d-flex align-items-center">
                                                    <label for="enable_auto_increment_admission_no" class="mr-4 mb-0">Enable Auto Increment of Student Admission No :</label>
                                                    <input type="checkbox" class="check" id="enable_auto_increment_admission_no" name="enable_auto_increment_admission_no" value="1" data-radio="iradio_square-red" {{ old('enable_auto_increment_admission_no') ? 'checked' : '' }}>
                                                </li>
                                            </ul>
                                            @error('enable_auto_increment_admission_no')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-group d-flex align-items-center">
                                            <ul class="icheck-list d-flex mb-0">
                                                <li class="d-flex align-items-center">
                                                    <label for="enable_news_comment_moderation" class="mr-4 mb-0">Enable news comment moderation :</label>
                                                    <input type="checkbox" class="check" id="enable_news_comment_moderation" name="enable_news_comment_moderation" value="1" data-radio="iradio_square-red" {{ old('enable_news_comment_moderation') ? 'checked' : '' }}>
                                                </li>
                                            </ul>
                                            @error('enable_news_comment_moderation')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-group d-flex align-items-center">
                                            <ul class="icheck-list d-flex mb-0">
                                                <li class="d-flex align-items-center">
                                                    <label for="enable_sibling" class="mr-4 mb-0">Enable siblings :</label>
                                                    <input type="checkbox" class="check" id="enable_sibling" name="enable_sibling" value="1" data-radio="iradio_square-red" {{ old('enable_sibling') ? 'checked' : '' }}>
                                                </li>
                                            </ul>
                                            @error('enable_sibling')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-group d-flex align-items-center">
                                            <ul class="icheck-list d-flex mb-0">
                                                <li class="d-flex align-items-center">
                                                    <label for="enable_password_change_at_first_login" class="mr-4 mb-0">Enable password change at first time login :</label>
                                                    <input type="checkbox" class="check" id="enable_password_change_at_first_login" name="enable_password_change_at_first_login" value="1" data-radio="iradio_square-red" {{ old('enable_password_change_at_first_login') ? 'checked' : '' }}>
                                                </li>
                                            </ul>
                                            @error('enable_password_change_at_first_login')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-group d-flex align-items-center">
                                            <ul class="icheck-list d-flex mb-0">
                                                <li class="d-flex align-items-center">
                                                    <label for="enable_roll_no_for_students" class="mr-4 mb-0">Enable roll number for students :</label>
                                                    <input type="checkbox" class="check" id="enable_roll_no_for_students" name="enable_roll_no_for_students" value="1" data-radio="iradio_square-red" {{ old('enable_roll_no_for_students') ? 'checked' : '' }}>
                                                </li>
                                            </ul>
                                            @error('enable_roll_no_for_students')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-group d-flex align-items-center">
                                            <ul class="icheck-list d-flex mb-0">
                                                <li class="d-flex align-items-center">
                                                    <label for="enable_google_sso" class="mr-4 mb-0">Enable Google SSO :</label>
                                                    <input type="checkbox" class="check" id="enable_google_sso" name="enable_google_sso" value="1" data-radio="iradio_square-red" {{ old('enable_google_sso') ? 'checked' : '' }}>
                                                </li>
                                            </ul>
                                            @error('enable_google_sso')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-group d-flex align-items-center">
                                            <ul class="icheck-list d-flex mb-0">
                                                <li class="d-flex align-items-center">
                                                    <label for="enable_auto_logout" class="mr-4 mb-0">Enable auto-logout :</label>
                                                    <input type="checkbox" class="check" id="enable_auto_logout" name="enable_auto_logout" value="1" data-radio="iradio_square-red" {{ old('enable_auto_logout') ? 'checked' : '' }}>
                                                </li>
                                            </ul>
                                            @error('enable_auto_logout')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-group d-flex align-items-center">
                                            <ul class="icheck-list d-flex mb-0">
                                                <li class="d-flex align-items-center">
                                                    <label for="enable_program" class="mr-4 mb-0">Enable program :</label>
                                                    <input type="checkbox" class="check" id="enable_program" name="enable_program" value="1" data-radio="iradio_square-red" {{ old('enable_program') ? 'checked' : '' }}>
                                                </li>
                                            </ul>
                                            @error('enable_program')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary" type="submit">Save General Setting</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('page-scripts')
<!-- Select2 Plugin JavaScript -->
<script src="{{ url('assets/node_modules/select2/dist/js/select2.full.min.js') }}" type="text/javascript"></script>

<!-- icheck -->
<script src="{{ url('assets/node_modules/icheck/icheck.min.js') }}"></script>
<script src="{{ url('assets/node_modules/icheck/icheck.init.js') }}"></script>

<!-- Date Picker Plugin JavaScript -->
<script src="{{ url('assets/node_modules/moment/moment.js') }}"></script>
<script src="{{ url('assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

<!-- Data Table js -->
<!-- This is data table -->
<script src="{{ url('assets/node_modules/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js') }}"></script>

<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

<script>
$(".select2").select2();
    $(function () {
        $('#data_table').DataTable({
            dom: 'Bfrtip',
            buttons: [
                //'copy', 'csv', 'excel', 'pdf', 'print'
                'copy', 'excel', 'pdf'
            ],
            responsive: true,
            "displayLength": 10,
        });
        // $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
        $('.buttons-copy, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
    });
</script>
<script>
    $("#tbl_data").on('click', 'button[name="btn_delete"]', function (e) {
        e.preventDefault();
        var form = $(this).parent('form');

        var dialogue_result = confirm("Are your sure you want to delete this record?");
        if (dialogue_result) {
            form.submit();
        }
    });
</script>
<script>
    // Material Date picker    
    $('#date_format, #date_separator').bootstrapMaterialDatePicker({
        weekStart: 0,
        time: false
    });
</script>
@endpush
