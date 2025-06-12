@extends('layouts.app')

@section('title', 'Applicants Enquiry Form')

@push('page-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">

<!-- Date picker plugins css -->
<link href="{{ url('assets/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">

<!-- Select2 plugins css -->
<link href="{{ url('assets/node_modules/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('page-title-bread-crumb')
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Applicant Enquiry</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('saas.applicants.enquiries.index') }}">< Applicant Enquiry List</a></li>
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
                <h4 class="card-title">Applicants Enquiry Form</h4>
                <form method="POST" action="" enctype="multipart/form-data" novalidate>                    
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Enquiry Details</h4>
                                    <hr>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="">Enquiring For The Year</label>
                                                <!-- <span class="text-danger">*</span> -->
                                            <select class="select2 form-control custom-select" name="" id="" style="width: 100%; height:36px;">
                                                <option value="">Select</option>
                                                <option value=""></option>
                                            </select>
                                            @error('')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Coruse </label> 
                                            <span class="text-danger">*</span>
                                            <select class="select2 form-control custom-select" name="" id="" style="width: 100%; height:36px;">
                                                <option value="">Select</option>
                                                <option value=""></option>
                                            </select>
                                            @error('')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label>Date</label> <span class="text-danger">*</span>
                                            <input type="text" class="form-control @error(''){{ 'is-invalid' }}@enderror" value="" placeholder="" name="" id="date">
                                            @error('')<div class="text-danger">{{ $message }}</div>@enderror                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Student Details</h4>
                                    <hr>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="">First Name</label> <span class="text-danger">*</span>
                                            <input type="text" class="form-control @error(''){{ 'is-invalid' }}@enderror" id="" name="" placeholder="First Name" value="">
                                            @error('')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Last Name</label>
                                            <input type="text" class="form-control @error(''){{ 'is-invalid' }}@enderror" id="" name="" placeholder="Last Name" value="{{ old('') }}">
                                            @error('')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Address Line1</label>  <span class="text-danger">*</span>
                                            <textarea name="" id="" class="form-control @error(''){{ 'is-invalid' }}@enderror"></textarea>
                                            @error('')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Address Line2</label>  <span class="text-danger">*</span>
                                            <textarea name="" id="" class="form-control @error(''){{ 'is-invalid' }}@enderror"></textarea>
                                            @error('')<div class="text-danger">{{ $message }}</div>@enderror
                                        </div> 
                                        <div class="col-md-6 mb-3">
                                            <label>Date Of Brith</label> <span class="text-danger">*</span>
                                            <input type="text" class="form-control @error(''){{ 'is-invalid' }}@enderror" value="" placeholder="" name="" id="date_of_brith">
                                            @error('')<div class="text-danger">{{ $message }}</div>@enderror                                        
                                        </div>                                             
                                    </div> 
                                    <button type="submit" class="btn btn-primary">Save</button>                                           
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
    </div> 
</div>

@endsection

@push('page-scripts')
<!-- Date Picker Plugin JavaScript -->
<script src="{{ url('assets/node_modules/moment/moment.js') }}"></script>
<script src="{{ url('assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

  <!-- Select2 Plugin JavaScript -->
<script src="{{ url('assets/node_modules/select2/dist/js/select2.full.min.js') }}" type="text/javascript"></script>

<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

<script>
    $(".select2").select2();
    $('#date, #date_of_brith').bootstrapMaterialDatePicker({
    weekStart: 0,
    time: false
});
</script>
@endpush
