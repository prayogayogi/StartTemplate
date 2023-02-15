@extends("layouts.auth", ["title" => "Forgot Password"])
@section("content")
<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                {{-- <div class="text-center mb-3">
                                    <a href="index.html"><img src="{{ asset("assets/admin/images/logo-full.png") }}" alt=""></a>
                                </div> --}}
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <h4 class="text-center mb-4">Forgot Password</h4>
                                <form action="{{ route('password.email') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label><strong>Email</strong></label>
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Your Email">
                                        @error('email')
                                        <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                                    </div>
                                    <div class="text-center mt-4 mb-2">
                                        <div class="mb-3">
                                            <a href="{{ route('login') }}">Back to Login?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
