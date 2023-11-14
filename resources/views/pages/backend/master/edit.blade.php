@extends('layouts.admin', ['title' => 'Edit Data'])

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
                        <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.master.update', $master->id) }}" method="post">
                    @method("PATCH")
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label for="name" class="form-label">Name</label>
                            <input name="name" class="form-control mb-3" value="{{ $master->name }}" type="text" id="name">
                        </div>
                        <div class="col-12">
                            <label for="age" class="form-label">Age</label>
                            <input name="age" class="form-control mb-3" value="{{ $master->age }}" type="text" id="age">
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection