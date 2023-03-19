@extends("layouts.auth", ["title" => "Register"])

@section("content")
<div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
            <div class="col mx-auto mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="text-center">
                                <h3 class="">Sign Up</h3>
                                <p>Already have an account? <a href="{{ route('login') }}">Sign in here</a>
                                </p>
                            </div>
                            <div class="login-separater text-center mb-5"> <span>OR SIGN UP WITH EMAIL</span>
                                <hr/>
                            </div>
                            <div class="form-body">
                                <form class="row g-3" method="POST" action="{{ route("register") }}">
                                    @csrf
                                    <div class="col-12">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="username" placeholder="Your Username">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" placeholder="Your Email">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group" id="show_hide_password">
                                            <input type="password" name="password" class="form-control border-end-0 @error('password') is-invalid @enderror" value="{{ old('password') }}" id="password" placeholder="Enter Password">
                                            <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="password_confirmation" class="form-label">Confirmation Password</label>
                                        <div class="input-group" id="show_hide_password_a">
                                            <input type="password" name="password_confirmation" class="form-control border-end-0 @error('password_confirmation') is-invalid @enderror" value="{{ old('password_confirmation') }}" id="password" placeholder="Enter Password">
                                            <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                            @error('password_confirmation')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>Sign up</button>
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
    <!--Password input one show & hide js -->
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

    <!--Password input two show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password_a a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password_a input').attr("type") == "text") {
					$('#show_hide_password_a input').attr('type', 'password');
					$('#show_hide_password_a i').addClass("bx-hide");
					$('#show_hide_password_a i').removeClass("bx-show");
				} else if ($('#show_hide_password_a input').attr("type") == "password") {
					$('#show_hide_password_a input').attr('type', 'text');
					$('#show_hide_password_a i').removeClass("bx-hide");
					$('#show_hide_password_a i').addClass("bx-show");
				}
			});
		});
	</script>
@endpush