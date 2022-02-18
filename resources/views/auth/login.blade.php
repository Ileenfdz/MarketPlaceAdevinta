@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="access d-flex justify-content-center">Log in</div>
        <div class="access-form">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="div-input">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                

                <div class="div-input">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                


                <div class="form-check">
                    <div class="div-remember">
                        <input class="form-check-input ms-2" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label ms-2 me-4" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="div-access my-3">
                        <button type="submit" class="btn-login border-0 py-2 px-5">
                            {{ __('Login') }}
                        </button>
                    </div>

                    @if (Route::has('password.request'))
                        <div class="div-forgot">
                            <a class="btn btn-link btn-forgot text-decoration-none" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    @endif

                </div>
            </form>
        </div>

    </div>
@endsection
