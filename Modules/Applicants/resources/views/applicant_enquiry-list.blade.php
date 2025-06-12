@extends('layouts.app')

@section('title', 'Applicants Enquiry List')

@push('page-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">

<!-- Daterange picker plugins css -->    
<link href="{{ url('assets/node_modules/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    
<!-- Date picker plugins css -->
<link href="{{ url('assets/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">

<!-- Select2 plugins css -->
<link href="{{ url('assets/node_modules/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Data table styles -->
<link rel="stylesheet" type="text/css" href="{{ url('assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">
@endpush

@section('page-title-bread-crumb')
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Applicant Enquiry List</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <!-- <li class="breadcrumb-item active">Blank Page1</li>
                <li class="breadcrumb-item active">Blank Page2</li>
                <li class="breadcrumb-item active">Blank Page3</li> -->
            </ol>
            <a href="{{ route('saas.applicants.enquiries.create') }}" class="btn btn-info d-none d-lg-block m-l-12 mr-2"><i class="fa fa-plus-circle"></i>Add New Enquiry</a>
            <div class="btn-group">
                <button type="button" class="btn btn-outline-info dropdown-toggle mr-2"
                    data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Reports</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('sass.applicant.reports-counselor.index') }}">Counselor</a>
                    <a class="dropdown-item" href="{{ route('sass.applicant.reports-source.index') }}">Source Report</a>
                    <a class="dropdown-item" href="{{ route('sass.applicant.reports-cource-wise.index') }}">Cource Wise Report</a>
                </div>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-outline-info dropdown-toggle"
                    data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Setting</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('sass.applicant.setting.enquiry-setting.index') }}">Enquiry Settings</a>
                    <a class="dropdown-item" href="{{ route('sass.applicant.reports-source.index') }}">Form Settings</a>
                    <a class="dropdown-item" href="{{ route('sass.applicant.setting.enquiry-year.index') }}">Active Years and Courses</a>
                </div>
            </div>
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
                <h4 class="card-title">Applicant Enquiry</h4>
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="" novalidate>
                            @csrf
                            <div class="form-row">
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
                                <div class="col-md-4 mb-3">
                                    <label for="class_id">Date Range </label> 
                                    <!-- <span class="text-danger">*</span> -->
                                    <div class='input-group mb-3'>
                                        <input type='text' class="form-control shawCalRanges" name="" value="" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <span class="ti-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                    @error('')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="">Course</label>
                                    <select class="select2 form-control custom-select @error(''){{ 'is-invalid' }}@enderror" name="" id="" style="width: 100%; height:36px;">
                                    <option value="">Select</option>
                                    </select>
                                    @error('')<div class="text-danger">{{ $message }}</div>@enderror
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
                <h4 class="card-title">Applicant Enquiry List</h4>
                <div class="table-responsive m-t-20">
                    <table id="data_table" class="display nowrap table table-hover table-striped table-bordered"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>All</th>
                                <th>New</th>
                                <th>Qualified</th>
                                <th>Processed</th>
                                <th>Rejected</th>
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
<!-- Date range Plugin JavaScript -->
<script src="{{ url('assets/node_modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

<!-- Date Picker Plugin JavaScript -->
<script src="{{ url('assets/node_modules/moment/moment.js') }}"></script>
<script src="{{ url('assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

  <!-- Select2 Plugin JavaScript -->
<script src="{{ url('assets/node_modules/select2/dist/js/select2.full.min.js') }}" type="text/javascript"></script>

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
      // Always Show Calendar on Ranges
      $('.shawCalRanges').daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            alwaysShowCalendars: true,
        });
</script>
@endpush
