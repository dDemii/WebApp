@extends('layouts.app')

@section('content')
<body class="login">
    <div id="app">

    <div class="container">
        <div class="row justify-content-center d-flex flex-row align-center-custom">
            
                <div class="col align-self-center">
                    <h2 class="login-fh" style="font-size: 2rem;">Food<span>Hub</span></h2>        

                    <h1 class="login-h1" style="font-size: 5rem">Satisfy Your<br>Cravings In<br>A Click!</h1>
                </div>

                    <div class="card col col-custom-login">
                        <div class="card-header">

                            <h1 class="login-header my-sm-3">Member Login</h1>

                        </div>

                        <div class="card-body mx-auto">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">

                                    <div class="col-auto">
                                        <input id="name" type="text" placeholder="Username" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="row mb-3">

                                    <div class="col-auto">
                                        <input id="password" type="password" placeholder="Password (6+ Characters)" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="row mx-auto">

                                    <div class="col-auto">
                                        <p>
                                        <button type="submit" class="btn btn-log rounded-pill">
                                            {{ __('Login') }}
                                        </button>
                                        <span class="or">or</span></p>
                                    </div>

                                    <div class="col-auto">
                                        <a class="btn btn-outline-lig" href="{{ route('register') }}">
                                            Sign-up
                                        </a>
                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>
            </div>

    </div>
    
</div>
    </div>
</body>
@yield('javascript')
@endsection
