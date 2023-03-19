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
                            <div class="login-separater text-center mb-5"> <span>OR SIGN IN WITH EMAIL</span>
                                <hr/>
                            </div>
                            <div class="form-body">
                                <form class="row g-3" method="POST" action="{{ route("login") }}">
                                    @csrf
                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">Email Address</label>
                                        <input type="email" value="{{ old('email') }}" name="email" class="form-control @error("email") is-invalid @enderror" id="inputEmailAddress" placeholder="Email Address">
                                        @error('email')
                                            <div id="inputEmailAddress" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                        <div class="input-group" id="show_hide_password">
                                            <input type="password" value="{{ old('password') }}" name="password" class="form-control border-end-0 @error('password') is-invalid @enderror" id="inputChoosePassword" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
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
    </div>
</div>
@endsection

{{-- Custome script --}}
@push('end-script')
    <!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
@endpush


