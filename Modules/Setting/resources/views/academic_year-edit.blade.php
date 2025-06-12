@extends('layouts.app')

@section('title', 'Edit Academic Year')

@push('page-styles')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">
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
        <h4 class="text-themecolor">Edit Academic Year</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Setting</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('sass.setting.academic-year.index')}}">Add Academic Year </a></li>
               <li class="breadcrumb-item active">Edit Academic Year</li>
               <!-- <li class="breadcrumb-item active">Blank Page3</li> --> 
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
                <h4 class="card-title">Edit Academic Year</h4>
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="{{ route('sass.setting.academic-year.update', $academic_years )}}" enctype="multipart/form-data" novalidate>
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="academic_year_name">Academic Year Name</label>  <span class="text-danger">*</span>
                                    <input type="text" class="form-control @error('academic_year_name') is-invalid @enderror" name="academic_year_name" value="{{ old('academic_year_name', $academic_years->academic_year_name) }}">
                                    @error('academic_year_name')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="start_date">Starting Date</label>  <span class="text-danger">*</span>
                                    <input type="text" class="form-control @error('start_date') is-invalid @enderror" name="start_date" id="start_date" value="{{ old('start_date', $academic_years->start_date) }}">
                                    @error('start_date')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="end_date">Ending Date</label>  <span class="text-danger">*</span>
                                    <input type="text" class="form-control @error('end_date') is-invalid @enderror" name="end_date" id="end_date" value="{{ old('end_date', $academic_years->end_date) }}">
                                    @error('end_date')<div class="text-danger">{{ $message }}</div>@enderror
                                </div>
                                <button class="btn btn-primary" type="submit">Update Academic Year</button>
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
                <h4 class="card-title">Academic Year List</h4>
                <div class="table-responsive m-t-20">
                    <table id="data_table" class="display nowrap table table-hover table-striped table-bordered"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Academic Year Name</th>
                                <th>Starting Date</th>
                                <th>Ending Date</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody id="tbl_data">
                            @php $sn = 1 @endphp
                            @foreach($academicYears as $academicYear)
                            <tr>
                                <td>{{ $sn }}</td>
                                <td>{{ $academicYear->academic_year_name }}</td>
                                <td>{{ $academicYear->start_date }}</td>
                                <td>{{ $academicYear->end_date }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-outline-info dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Select</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('sass.setting.academic-year.edit', $academicYear)}}">Edit</a>
                                            <form method="POST" action="{{ route('sass.setting.academic-year.destroy', $academicYear)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button name="btn_delete" class="dropdown-item">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @php $sn++ @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
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
// Material Date picker    
$('#start_date, #end_date').bootstrapMaterialDatePicker({
    weekStart: 0,
    time: false
});
</script>
@endpush
