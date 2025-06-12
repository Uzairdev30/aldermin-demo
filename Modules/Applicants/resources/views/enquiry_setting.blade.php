@extends('layouts.app')

@section('title', 'Applicants Enquiry Setting')

@push('page-styles')
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css') }}">

    <!-- Date picker plugins css -->
    <link href="{{ url('assets/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}"
        rel="stylesheet">

    <!-- icheck -->
    <link href="{{ url('assets/node_modules/icheck/skins/all.css') }}" rel="stylesheet">
    <link href="{{ url('assets/dist/css/pages/form-icheck.css') }}" rel="stylesheet">

    <!-- Select2 plugins css -->
    <link href="{{ url('assets/node_modules/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('page-title-bread-crumb')
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Applicant Enquiry Setting</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('saas.applicants.enquiries.index') }}">
                            < Applicant Enquiry List</a>
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
                    <h4 class="card-title">Applicants Enquiry Setting</h4>
                    <form method="POST" action="" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">

                                        {{-- Enquiry Stages --}}
                                        <h4 class="card-title">Enquiry Stages</h4>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="">Default</label>
                                                <input type="text" class="form-control" placeholder="Qualified">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="#" data-toggle="modal" data-target="#addStageModal"
                                                class="text-primary">
                                                <i class="fas fa-plus-circle"></i> Add Stage
                                            </a>
                                        </div>

                                      

                                     
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 1 -->
    <div class="modal fade" id="addStageModal" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="vcenter">New Enquiry Stage</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="">Name</label>
                                <input type="text" class="form-control @error('') is-invalid @enderror" name=""
                                    placeholder="" value="">
                                @error('')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-primary" value="Save">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="addCounselorModal" tabindex="-1" role="dialog" aria-labelledby="vcenter"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="vcenter">Add Counselors</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="" class="form-label">Counselor Type</label>
                                <div class="form-group">
                                    <div class="input-group icheck-list">
                                        <label>
                                            <input type="radio" class="check" name="registration_notification"
                                                value="1" data-radio="iradio_square-red" checked> Employee
                                        </label>
                                        &nbsp;&nbsp;
                                        <label>
                                            <input type="radio" class="check" name="registration_notification"
                                                value="0" data-radio="iradio_square-red"> Outside Agent
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 mb-3">
                                <label for="">Academic Year</label>
                                <!-- <span class="text-danger">*</span> -->
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
            </div>
        </div>
    </div>

    {{-- Modal 3 --}}
    <div class="modal fade" id="addSourceModal" tabindex="-1" role="dialog" aria-labelledby="vcenter"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="vcenter">New Source of Information</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="">Name</label>
                                <input type="text" class="form-control @error('') is-invalid @enderror" name=""
                                    placeholder="" value="">
                                @error('')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <br>
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
    <script src="{{ url('assets/node_modules/select2/dist/js/select2.full.min.js') }}" type="text/javascript"></script>4

    <!-- Date Picker Plugin JavaScript -->
    <script src="{{ url('assets/node_modules/moment/moment.js') }}"></script>
    <script
        src="{{ url('assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
    </script>

    <!-- icheck -->
    <script src="{{ url('assets/node_modules/icheck/icheck.min.js') }}"></script>
    <script src="{{ url('assets/node_modules/icheck/icheck.init.js') }}"></script>

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
