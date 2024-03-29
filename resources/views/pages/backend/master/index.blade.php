@extends('layouts.admin', ['title' => 'Master data'])

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Master data</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Master Data</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('admin.master.create') }}" class="btn btn-primary">Add data</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('after-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/plugins/yajra-data-table/datatables.min.css') }}"/>
@endpush

@push('after-script')
    <script src="{{ asset('assets/backend/plugins/yajra-data-table/jquery-3.1.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/backend/plugins/yajra-data-table/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/sweetalert2/sweetalert2@11.js') }}"></script>
    <script>
        $(document).ready( function () {
            let table = $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! url()->current() !!}',
                columns: [
                    { data: 'name', name: 'name' },
                    { data: 'age', name: 'age' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' },
                    { data: 'action', name: 'action', className:'text-center' },
                ]
            });
            table.on('draw.dt', function () {
                $('#myTable tbody').on('click', 'button.delete', function () {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            let data = table.row($(this).closest('tr')).data();
                            $.ajax({
                                url: 'master/' + data.id,
                                type: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function (data) {
                                    console.log(data.message);
                                },
                                error: function (error) {
                                    console.log('Error:', error);
                                }
                            });
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        }
                        
                    })
                });
            });
        } );
    </script>

    <script>
        function delete(data){
            
        }
    </script>
@endpush