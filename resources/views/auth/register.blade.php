@extends('layouts.app')

@section('content')
<div class="box3">
    <div class="reg-box">
   
                
            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group2">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{__('E-Mail Address')}}</label>

                            
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="form-group2">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{__('Password')}}</label>

                         
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="form-group2">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{__('Confirm Password')}}</label>

                            
                                <input id="password-confirm" type="password" class="form-control2" name="password_confirmation" required>
                           
                        </div>

                        
                                <button type="submit" class="submit-button">
                                    {{__('Register')}}
                                </button>
                           
                    </form>
                 
            
        
    </div>
</div>
@endsection
