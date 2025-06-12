@extends('layouts.app')

@section('title', 'Add Manage Building')

@push('page-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">

<!-- Data table styles -->
<link rel="stylesheet" type="text/css" href="{{ url('assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css')}}">

@endpush

@section('page-title-bread-crumb')
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Manage Building</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('saas.classroom-allocation.manage-building.index')}}">< Manage Building List</a></li>
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
                <h4 class="card-title text-center">Add Building</h4>
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <form method="POST" action="" enctype="multipart/form-data" novalidate style="background-color: #f0f0f0; padding: 20px; box-shadow: 0px 4px 8px rgba(0,0,0,0.1);">
                            @csrf

                            <div class="col-md-5 mb-3">
                                <label for="building_name">Class Name</label>
                                <input type="text" class="form-control @error('building_name') is-invalid @enderror" name="building_name" placeholder="Class Name" value="{{ old('building_name') }}">
                                @error('building_name')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title mb-0">Add Room</h5>
                                <button type="button" class="btn btn-primary" id="addRowBtn">Add</button>
                            </div>
                            <hr>

                            <!-- Room Rows -->
                            <div id="roomContainer">
                                <!-- Default Room Row -->
                                <div class="form-row room-row">
                                    <div class="col-md-5 mb-3">
                                        <label>Room Name</label>
                                        <input type="text" name="room_name[]" class="form-control" placeholder="Room Name">
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <label>Capacity</label>
                                        <input type="number" name="capacity[]" class="form-control" placeholder="Capacity">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center mt-4">
                                <button class="btn btn-primary" type="submit">Save Building</button>
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
document.addEventListener("DOMContentLoaded", function () {
    const roomContainer = document.getElementById('roomContainer');
    const addRowBtn = document.getElementById('addRowBtn');

    addRowBtn.addEventListener('click', function (e) {
        e.preventDefault();

        // Create new elements
        const newRow = document.createElement('div');
        newRow.classList.add('form-row', 'room-row');

        newRow.innerHTML = `
            <div class="col-md-5 mb-3">
                <input type="text" name="room_name[]" class="form-control">
            </div>
            <div class="col-md-5 mb-3">
                <input type="number" name="capacity[]" class="form-control">
            </div>
            <div class="col-md-2 mb-3 d-flex align-items-end">
                <button type="button" class="btn btn-danger removeBtn"><i class="fa fa-trash"></i></button>
            </div>
        `;

        roomContainer.appendChild(newRow);
    });

    // Remove button logic (only for dynamically added rows)
    roomContainer.addEventListener('click', function (e) {
        if (e.target.closest('.removeBtn')) {
            e.preventDefault();
            const row = e.target.closest('.room-row');
            row.remove();
        }
    });
});
</script>


@endpush
