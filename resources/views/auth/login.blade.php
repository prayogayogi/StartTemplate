@extends("layouts.auth", ["title" => "Login"])
@section("content")
<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
            <div class="col mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="text-center">
                                <h3 class="">Sign in</h3>
                                <p>Don't have an account yet? <a href="{{ route("register") }}">Sign up here</a>
                                </p>
                            </div>
                            <div class="d-grid">
                                <a class="btn my-4 shadow-sm btn-white" href="javascript:;">
                                <span class="d-flex justify-content-center align-items-center">
                                    <img class="me-2" src="{{ asset('assets/assets/images/icons/search.svg') }}" width="16" alt="Image Description">
                                    <span>Sign in with Google</span>
                                </span>
                                </a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign in with Facebook</a>
                            </div>
                            <div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
                                <hr/>
                            </div>
                            <div class="form-body">
                                <form class="row g-3" method="POST" action="{{ route("login") }}">
                                    @csrf
                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">Email Address</label>
                                        <input type="email" name="email" class="form-control @error("email") is-invalid @enderror" id="inputEmailAddress" placeholder="Email Address">
                                        @error('email')
                                            <div id="inputEmailAddress" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                        <div class="input-group" id="show_hide_password">
                                            <input type="password" name="password" class="form-control border-end-0 @error('password') is-invalid @enderror" id="inputChoosePassword" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-end">	<a href="/forgot-password">Forgot Password ?</a>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
</div>
@endsection


