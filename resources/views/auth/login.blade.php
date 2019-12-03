@extends('layouts.app')

@section('content')


<div class="login-page">
  <div class="form">
     <form class="login-form" method="POST" action="{{ route('login') }}">
    @csrf
         <input id="email" placeholder="Email" type="email" class="" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
           @error('email')    <span class="invalid-feedback" role="alert"> {{$message}} </span> @enderror
       
          <input id="password" placeholder="Password" type="password" class="inputField @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')<span class="invalid-feedback" role="alert"><strong>{{$message}}</strong></span> @enderror
             <label class="containerOption">Remember Me
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span class="checkmark"></span>
            </label>
             <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
            </button>
             @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
      
    </form>
  </div>
</div>





{{-- <div class="container">
    <div class="heightInPx"></div>
    <div class="row justify-content-center">
        <div class="form-custom-des col-md-12">
            <div class="card form-custom-des">
			
                <div class="loginFormBody">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" placeholder="Email" type="email" class="inputField @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        {{$message}}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" placeholder="Password" type="password" class="inputField @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
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
</div> --}}
@endsection
