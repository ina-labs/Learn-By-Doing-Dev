{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="{{asset('frontend/libraries/bootstrap/css/bootstrap.css')}}">
  
  <link
    href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,700,700i,900,900i&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{asset('frontend/styles/login.css')}}">


</head>
<body>
  
  <div class="container">
   
      <div class="login-page">
        <div class="row">
        <div class="col-md-6 d-flex align-items-center">
          
          <div class="login-page-right">
            <div class="header-login">
              <a class="navbar-brand" href="#">
                <img src="frontend/images/logo_scire.png" alt="Logo Travel" srcset="">      
              </a>
              
            </div>
  
            <div class="form-login">
              <h1>Sign In</h1>
              <p>Sign in to continue to our application</p>
              <form action="{{ route('login') }}"  method="post">
                @csrf
                <div class="input-group mb-3">
                  
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                  @enderror
                </div>
  
                <div class="input-group mb-3">
                  
                  <input id="password" type="password" type="text"class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </div>

                @if (Route::has('password.request'))
                <div class="forgot-password text-right mb-3 py-2">
                  <a href="{{ route('password.request') }}" class="forgot">
                    Lupa Password
                  </a>
                </div>
                @endif

                <button type="submit" class="btn btn-block btn-login-page">
                  Sign In
                </button>

                <div class="forgot-password text-left mb-3 py-2">
                  <a href="{{ route('register') }}" class="forgot">
                    Belum Mempunyai Akun?
                  </a>
                </div>

              </form>
            </div>
          </div>

        </div>
        <div class="col-md-6 d-none d-md-block">
          <div class="login-page-left">
            
          </div>
        </div>
      </div>
      </div>     
    
  </div>

  @stack('prepend-script')

  @include('includes.script')

  @stack('addon-script')


</body>
</html>