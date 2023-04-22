@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                    <h1>

                        Food<span class = "no-wrap h">Hub</span>

                    </h1>
                    <h4>

                        Sign Up for free<br>
                        and Satisfy your Cravings!

                    </h4>
                </div>

                <div class="card-body mx-auto">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">

                            <div class="col-auto">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-auto">
                                <input id="name" type="text" placeholder="Username (6+ Characters)" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-auto">
                                <input id="password" type="password" placeholder="Password (6+ Characters)" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-auto">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-outline-lig">
                                    {{ __('Sign Up') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-3">
                        
                            <p>
                                Already have an account?<br>
                                <a class="navbar-brand fw-bold log" href="{{ route('login') }}">
                                    Login
                                </a>
                                 here.
                            </p>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
