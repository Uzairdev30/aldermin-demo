@extends('layouts.app')

@section('title', 'Swap TimeTable')

@push('page-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">

<!-- Select2 plugins css -->
<link href="{{ url('assets/node_modules/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

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
        <h4 class="text-themecolor">Swap TimeTable</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <!-- <li class="breadcrumb-item mr-2"><a href="">< Subject List</a></li> -->
            </ol>
            <a href="{{ route('saas.timetable.swapped-report.index') }}" class="btn btn-info d-none d-lg-block mr-2"> Swapped Timetable Report</a>
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
                <h4 class="card-title">Swap TimeTable :</h4>
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="" novalidate>
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <div class="input-group icheck-list">
                                            <label>
                                                <input type="radio" class="check" name="swap_type" value="1" checked> Batch Wise 
                                            </label>
                                            &nbsp;&nbsp;
                                            <label>
                                                <input type="radio" class="check" name="swap_type" value="0"> Date Employee Wise 
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                {{-- Batch Wise Fields --}}
                                <div id="batch-wise-fields" class="row w-100">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Batch</label>
                                        <select class="select2 form-control custom-select" name="" style="width: 100%; height:36px;">
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Date</label> 
                                        <input type="text" class="form-control" name="" id="batch_wise_date" placeholder="">
                                    </div>
                                </div>

                                {{-- Employee Wise Fields --}}
                                <div id="employee-wise-fields" class="row w-100" style="display: none;">
                                    <div class="col-md-4 mb-3">
                                        <label for="">Batch</label>
                                        <select class="select2 form-control custom-select" name="" style="width: 100%; height:36px;">
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="">Employee</label>
                                        <select class="select2 form-control custom-select" name="" style="width: 100%; height:36px;">
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="">Date</label>
                                        <input type="text" class="form-control" name="" id="employee_wise_date" placeholder="">
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
    $(".select2").select2();
    $('#batch_wise_date, #employee_wise_date').bootstrapMaterialDatePicker({
    weekStart: 0,
    time: false
    });
</script>
<script>
    $(document).ready(function () {
        // Initialize select2
        $(".select2").select2();

        // Initialize date pickers
        $('#batch_wise_date, #employee_wise_date').bootstrapMaterialDatePicker({
            weekStart: 0,
            time: false
        });

        // iCheck-specific change event
        $('input[name="swap_type"]').on('ifChanged', function () {
            if ($(this).val() === "1") {
                $('#batch-wise-fields').show();
                $('#employee-wise-fields').hide();
            } else {
                $('#batch-wise-fields').hide();
                $('#employee-wise-fields').show();
            }
        });

        // Fallback: also bind normal change event just in case
        $('input[name="swap_type"]').on('change', function () {
            if ($(this).val() === "1") {
                $('#batch-wise-fields').show();
                $('#employee-wise-fields').hide();
            } else {
                $('#batch-wise-fields').hide();
                $('#employee-wise-fields').show();
            }
        });
    });
</script>



@endpush
