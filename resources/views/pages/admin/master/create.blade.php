@extends('layouts.admin', ['title' => 'Created Data'])

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
                        <li class="breadcrumb-item active" aria-current="page">Create Data</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.master.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label for="name" class="form-label">Name</label>
                            <input name="name" class="form-control mb-3 @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Enter your name" type="text" id="name">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="age" class="form-label">Age</label>
                            <input name="age" class="form-control mb-3 @error('age') is-invalid  @enderror" value="{{ old('age') }}" placeholder="Enter yout age" type="text" id="age">
                            @error('age')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
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