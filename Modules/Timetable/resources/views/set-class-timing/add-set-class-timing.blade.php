@extends('layouts.app')

@section('title', 'Set Class Timing List')

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
        <h4 class="text-themecolor">Set Class Timing</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <!-- <li class="breadcrumb-item mr-2"><a href=""></a></li> -->
                 <li class="breadcrumb-item"><a href="{{ route('saas.set-class-timing.index') }}">< Set Class Timing List</a></li>
            </ol>

        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
@endsection

@section('content')

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Set Class Timing</h4>
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="" enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="">Name</label>  
                                    <span class="text-danger">*</span>
                                    <input type="text" class="form-control @error('') is-invalid @enderror" name="" value="{{ old('') }}">
                                    @error('')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <button class="btn btn-primary" type="submit">Save </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Set Class Timing</h4>
                <div class="table-responsive m-t-20">
                    <table id="data_table" class="display nowrap table table-hover table-striped table-bordered"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody id="tbl_data">
                            @php $sn = 1 @endphp
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-outline-info dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Select</button>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" data-toggle="modal" data-target="#myModel">
                                                View Class Timing
                                            </button>
                                            <a class="dropdown-item" href="">Edit</a>
                                            <form method="POST" action="">
                                                @csrf
                                                @method('DELETE')
                                                <button name="btn_delete" class="dropdown-item">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @php $sn++ @endphp
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="myModel" class="modal" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="vcenter">Add New Class Timing For Default</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="" method="POST"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="">Name</label>  
                            <!-- <span class="text-danger">*</span> -->
                            <input type="text" class="form-control @error('') is-invalid @enderror" name="" value="{{ old('') }}">
                            @error('')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="start_time">Start Time</label> 
                            <!-- <span class="text-danger">*</span> -->
                            <input type="text" class="form-control @error('start_time'){{ 'is-invalid' }}@enderror" id="start_time" name="start_time" placeholder="" value="{{ old('start_time') }}" required>
                            @error('start_time')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="end_time">End Time</label> 
                            <!-- <span class="text-danger">*</span> -->
                            <input type="text" class="form-control @error('end_time'){{ 'is-invalid' }}@enderror" id="end_time" name="end_time" placeholder="" value="{{ old('end_time') }}" required>
                            @error('end_time')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>

                         <div class="col-12">
                            <div class="form-group">
                                <div class="input-group d-flex align-items-center">
                                    <ul class="icheck-list d-flex mb-0">
                                        <li class="d-flex align-items-center">
                                            <label for="" class="mr-4 mb-0">Is a Break :</label>
                                            <input type="checkbox" class="check" id="" name="" value="1" data-radio="iradio_square-red" >
                                        </li>
                                    </ul>
                                    @error('')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Save">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
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
    $('#start_time, #end_time').bootstrapMaterialDatePicker({ format: 'HH:mm', time: true, date: false });
</script>
@endpush
