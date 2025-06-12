@extends('layouts.app')

@section('title', 'Course Applicants')

@push('page-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">
    
<!-- Date picker plugins css -->
<link href="{{ url('assets/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">

<!-- Select2 plugins css -->
<link href="{{ url('assets/node_modules/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Data table styles -->
<link rel="stylesheet" type="text/css" href="{{ url('assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">

<style>
    #filter-toggle {
    display: block;
    margin-top: 20px;
    }

    .filter-fields {
        margin-top: 20px;
    }

    .filter-fields .col-md-4 {
        margin-bottom: 20px;
    }

</style>
@endpush

@section('page-title-bread-crumb')
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Course Applicants</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li> -->
                <!-- <li class="breadcrumb-item active">Blank Page1</li>
                <li class="breadcrumb-item active">Blank Page2</li>
                <li class="breadcrumb-item active">Blank Page3</li> -->
            </ol>

            <a href="{{ route('sass.add-applicant-registration.index')}}" class="btn btn-info d-none d-lg-block mr-2"><i class="fa fa-plus-circle"></i> Add New Registration
            </a>

            <a href="{{ route('sass.course-registration.index')}}" class="btn btn-info d-none d-lg-block mr-2"> Course Registration</a>
            
            <div class="btn-group">
                <button type="button" class="btn btn-outline-info dropdown-toggle mr-2"
                    data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Setting</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('sass.pin-groups.index') }}">Manage Pins</a>
                    <a class="dropdown-item" href="{{ route('sass.active-year-course.index') }}">Active Years and Courses</a>
                    <a class="dropdown-item" href="{{ route('sass.notification-setting.index') }}">Notification Settings</a>
                    <a class="dropdown-item" href="{{ route('sass.registration-course-setting.index') }}">Registration Course Settings</a>
                </div>
            </div>

            <a href="{{ route('sass.preview-applicant-form.index')}}" class="btn btn-info d-none d-lg-block mr-2"> Preview</a>
            
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
                <h4 class="card-title">Course Applicants</h4>
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="" novalidate>
                            @csrf
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="">Registration Name</label>  
                                    <!-- <span class="text-danger">*</span> -->
                                    <input type="text" class="form-control @error('') is-invalid @enderror" name="" value="{{ old('') }}">
                                    @error('')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Academic Year</label> 
                                    <!-- <span class="text-danger">*</span> -->
                                    <select class="select2 form-control custom-select" name=""
                                        style="width: 100%; height:36px;">
                                        <option value="">Select</option>
                                        <option value=""></option>
                                    </select>
                                    @error('')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <button type="button" id="filter-toggle" class="btn btn-link text-right mt-2">
                                    <i class="fa fa-plus-circle"></i> Filter by Date
                                </button>


                                <div class="filter-fields" style="display: none; margin-top: 20px;">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="">Course </label> 
                                            <!-- <span class="text-danger">*</span> -->
                                            <select class="select2 form-control custom-select" name="" id="" style="width: 100%; height:36px;">
                                                <option value="">Select</option>
                                                <option value=""></option>
                                            </select>
                                            @error('')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="">Start Date</label> 
                                            <!-- <span class="text-danger">*</span> -->
                                            <input type="text" class="form-control @error(''){{ 'is-invalid' }}@enderror" value="" placeholder="" name="" id="start_date">
                                            @error('')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="">End Date</label> 
                                            <!-- <span class="text-danger">*</span> -->
                                            <input type="text" class="form-control @error(''){{ 'is-invalid' }}@enderror" value="" placeholder="" name="" id="end_date">
                                            @error('')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Course Applicants List</h4>
                <div class="table-responsive m-t-20">
                    <table id="data_table" class="display nowrap table table-hover table-striped table-bordered"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Reg No</th>
                                <th>Applicant Name</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Application Fee</th>
                            </tr>
                        </thead>
                        <tbody id="tbl_data">
                            @php $sn = 1 @endphp
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @php $sn++ @endphp
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')

<!-- Select2 Plugin JavaScript -->
<script src="{{ url('assets/node_modules/select2/dist/js/select2.full.min.js') }}" type="text/javascript"></script>

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
    $(document).ready(function() {
        $('#filter-toggle').click(function() {
            $('.filter-fields').toggle();
        });
    });
</script>

<script>
    $(".select2").select2();
    $('#start_date, #end_date').bootstrapMaterialDatePicker({
    weekStart: 0,
    time: false
});
</script>

@endpush
