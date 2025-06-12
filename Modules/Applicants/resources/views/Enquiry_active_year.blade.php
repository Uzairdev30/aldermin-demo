@extends('layouts.app')

@section('title', 'Active Year And Course Setting')

@push('page-styles')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css') }}">

    <!-- Select2 plugins css -->
    <link href="{{ url('assets/node_modules/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('page-title-bread-crumb')
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Active Year And Course Setting</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('saas.applicants.enquiries.index') }}">
                            Applicant Enquiry List</a>
                    </li>
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
                    <h4 class="card-title">Active Years & Courses</h4>
                    <form method="POST" action="" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="card-title">You can manage the academics years and the courses that will
                                            be open for enquiry</p>
                                        <hr>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#addCourse">
                                                    + Add Course
                                                </button>
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

    <!-- Modal -->
    <div class="modal fade" id="addCourse" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Active Courses</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="addCourse">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="">Academic Year</label>
                                <select class="select2 form-control custom-select" name="" id=""
                                    style="width: 100%; height:36px;">
                                    <option value="">Select Academic Year</option>
                                    <option value=""></option>
                                </select>
                                @error('')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </form>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" form="addSourceForm" class="btn btn-success">Save</button>
                </div> --}}
            </div>
        </div>
    </div>





@endsection

@push('page-scripts')
  
 <!-- Select2 Plugin JavaScript -->
 <script src="{{ url('assets/node_modules/select2/dist/js/select2.full.min.js') }}" type="text/javascript"></script>

    <!-- start - This is for export functionality only -->
      <!-- Date Picker Plugin JavaScript -->
    <script src="{{ url('assets/node_modules/moment/moment.js') }}"></script>
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
@endpush
