@extends('layouts.app')

@section('title', 'Applicants Enquiry List')

@push('page-styles')
<!-- Select2 plugins css -->
<link href="{{ url('assets/node_modules/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />


@endpush

@section('page-title-bread-crumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Source Reports</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('saas.applicants.enquiries.index') }}">Applicants Enquiry</a></li>
                <!-- <li class="breadcrumb-item active">Blank Page1</li>
                <li class="breadcrumb-item active">Blank Page2</li>
                <li class="breadcrumb-item active">Blank Page3</li> -->
            </ol>
           
            <div class="btn-group">
                <button type="button" class="btn btn-outline-info dropdown-toggle"
                    data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Reports</button>
                <div class="dropdown-menu">
                    
                    <a class="dropdown-item" href="{{route('sass.applicant.reports-counselor.index')}}">Counselor Report</a>
                    <a class="dropdown-item" href="{{route('sass.applicant.reports-cource-wise.index')}}">Cource Wise Report</a>
                </div>
            </div>
            
        </div>
    </div>
</div>


@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">                   
                <h4 class="card-title">Source Report</h4>
                <form method="POST" action="" enctype="multipart/form-data" novalidate>                    
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">You can find the total number of enquiries coming from different sources and track the progress</p>
                                    <hr>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="">Academic Year</label>
                                                <!-- <span class="text-danger">*</span> -->
                                            <select class="select2 form-control custom-select" name="" id="" style="width: 100%; height:36px;">
                                                <option value="">Select Academic Year</option>
                                                <option value=""></option>
                                            </select>
                                            @error('')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
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
@endpush