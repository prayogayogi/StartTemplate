@extends('layouts.admin', ['title' => 'User'])

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
                                <th>Email</th>
                                <th>Role</th>
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
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! url()->current() !!}',
                columns: [
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'age' },
                    { data: 'role.name', name: 'role' },
                    { data: 'action', name: 'action' },
                ]
            });
        } );
    </script>
    
    <script src="{{ asset('assets/backend/plugins/sweetalert2/sweetalert2@11.js') }}"></script>
    <script>
        function delete(data){
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
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
        })
        }
    </script>

@endpush