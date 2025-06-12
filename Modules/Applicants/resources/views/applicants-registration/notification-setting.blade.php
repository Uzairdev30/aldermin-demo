@extends('layouts.app')

@section('title', 'Notification Setting')

@push('page-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">

<!-- icheck -->
<link href="{{ url('assets/node_modules/icheck/skins/all.css') }}" rel="stylesheet">
<link href="{{ url('assets/dist/css/pages/form-icheck.css') }}" rel="stylesheet">

<!-- Data table styles -->
<link rel="stylesheet" type="text/css" href="{{ url('assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">

@endpush

@section('page-title-bread-crumb')
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Notification Setting</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item mr-2"><a href="{{ route('sass.applicant.course-applicant.index') }}">< course applicants</a></li>
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
                <h4 class="card-title text-center">Notification Setting</h4>
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <form method="POST" action="" enctype="multipart/form-data" novalidate style="background-color: #f0f0f0; padding: 20px; box-shadow: 0px 4px 8px rgba(0,0,0,0.1);">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="" class="form-label">Registration Notification</label>
                                    <div class="form-group">
                                        <div class="input-group icheck-list">
                                            <label>
                                                <input type="radio" class="check" name="registration_notification" value="1" data-radio="iradio_square-red" checked> Enable
                                            </label>
                                            &nbsp;&nbsp;
                                            <label>
                                                <input type="radio" class="check" name="registration_notification" value="0" data-radio="iradio_square-red"> Disable
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="" class="form-label">Registration Submission Notification</label>
                                    <div class="form-group">
                                        <div class="input-group icheck-list">
                                            <label>
                                                <input type="radio" class="check" name="registration_submission_notification" value="1" data-radio="iradio_square-red" checked> Enable
                                            </label>
                                            &nbsp;&nbsp;
                                            <label>
                                                <input type="radio" class="check" name="registration_submission_notification" value="0" data-radio="iradio_square-red"> Disable
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="" class="form-label d-block">Notifications</label>
                                    <div class="rounded p-3 d-flex">
                                        <ul class="icheck-list d-flex">
                                            <li>
                                                <input type="checkbox" class="check" id="checkbox-sms" name="send_sms" value="1" data-checkbox="icheckbox_square-red">
                                                <label for="checkbox-sms" class="ms-1">SMS</label>
                                            </li>
                                            &nbsp;&nbsp;
                                            <li>
                                                <input type="checkbox" class="check" id="checkbox-email" name="send_email" value="1" data-checkbox="icheckbox_square-red">
                                                <label for="checkbox-email" class="ms-1">Email</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="" class="form-label">Daily Digest</label>
                                    <div class="form-group">
                                        <div class="input-group icheck-list">
                                            <label>
                                                <input type="radio" class="check" name="registration_submission_notification" value="1" data-radio="iradio_square-red" checked> Enable
                                            </label>
                                            &nbsp;&nbsp;
                                            <label>
                                                <input type="radio" class="check" name="registration_submission_notification" value="0" data-radio="iradio_square-red"> Disable
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="" class="form-label d-block">Digest Mode</label>
                                    <div class="rounded p-3 d-flex">
                                        <ul class="icheck-list d-flex">
                                            <li>
                                                <input type="checkbox" class="check" id="checkbox-email" name="send_email" value="1" data-checkbox="icheckbox_square-red">
                                                <label for="checkbox-email" class="ms-1">Email</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary" type="submit">Update Notification Setting</button>
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

<!-- icheck -->
<script src="{{ url('assets/node_modules/icheck/icheck.min.js') }}"></script>
<script src="{{ url('assets/node_modules/icheck/icheck.init.js') }}"></script>

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

@endpush
