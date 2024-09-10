@extends('layouts.guest')

@section('content')
    <div class="card-body px-5 py-5">
        <h3 class="card-title text-start mb-3">Login</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" class="form-control p_input" id="email" name="email" :value="old('email')"
                    required>
            </div>

            <div class="form-group">
                <label for="password">Password *</label>
                <input type="password" class="form-control p_input" id="password" name="password">
            </div>

            <div class="form-group d-flex align-items-center justify-content-between">
                <div class="form-check">
                    <label class="form-check-label" id="remember_me">
                        <input type="checkbox" class="form-check-input" id="remember_me" name="remember"> Remember me
                    </label>
                </div>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="forgot-pass">Forgot password</a>
                @endif
            </div>

            <div class="text-center d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
            </div>

            <div class="d-flex">
                <button class="btn btn-facebook me-2 col">
                    <i class="mdi mdi-facebook"></i> Facebook
                </button>
                <button class="btn btn-google col">
                    <i class="mdi mdi-google-plus"></i> Google plus
                </button>
            </div>
            <p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p>
        </form>
    </div>
@endsection
