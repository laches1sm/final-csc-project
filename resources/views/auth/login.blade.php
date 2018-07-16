@extends('layouts.app')

@section('content')
<div class="box2">
    <div class="login-box">

            <p class="info">
                Here, you can login to the website and add events.
</p>
   
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group2">
                            <label for="email">{{ __('E-Mail Address') }}</label>

                           
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group3">
                            <label class="passLabel" for="password">{{ __('Password') }}</label>

                          
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       <div class="ihatecss">
                        
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
</div>
                   

                        <div class="form-group5">
                         
                                <button type="submit" class="submit-reg-button">
                                    {{ __('Login') }}
                                </button>

                                </div>
                                <div class ="linkybois">

                                <a class="btn-forgot" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>

                                <a class="reg-link" href="/register">
                                    No account? Register!
</a>
                            
                        </div>
                    </form>
                </div>
            </div>
    
    
</div>
@endsection
