@extends('layouts.app')

@section('content')
<h1>Registration</h1>
<div id=createAd>
    <div class="container">
        <div class="register-row">
            <div class="registration-main">
                    <div class="register-body">
                        <form class ="form-register" method="POST" action="{{ route('register') }}">
                            @csrf
                    <!-- first name and last name  -->
                        <div class="form-register-group" >
                            <input id="firstname" class="form-control" type="text"  @error('firstname') is-invalid @enderror name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                            <label for="firstname" >{{ __('First Name') }}</label>
                            @error('FirstName')
                                <span  role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-register-group">
                            <input id="lastname" class="form-control" type="text" @error('lastname') is-invalid @enderror name="lastname" value="{{ old('lastname') }}" required autocomplete="name" autofocus>
                            <label for="lastname" >{{ __('Last Name') }}</label>
                            @error('lastname')
                                <span  role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                         </div>
                        <!-- email address  -->
                        <div class="form-register-group">
                            <input id="email" type="email" class="form-control" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email">
                            <label for="email" >{{ __('E-Mail Address') }}</label>
                            @error('email')
                                <span  role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- username  -->
                        <div class="form-register-group">
                            <input id="username" type="text" class="form-control" {{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                            @if ($errors->has('username'))
                                <span >
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                            <label for="name" >{{ __('Username') }}</label>
                        </div>
                         <!-- password and confirm password  -->
                        <div class="form-register-group">
                            <input id="password" type="password" class="form-control" @error('password') is-invalid @enderror name="password" required autocomplete="new-password">
                            @error('password')
                                <span  role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="password" >{{ __('Password') }}</label>
                        </div>
                        <div class="form-register-group">
                            <input id="password-confirm" type="password" class="form-control"  name="password_confirmation" required autocomplete="new-password">
                                
                            <label for="password-confirm" >{{ __('Confirm Password') }}</label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit"> Register
                        </button>
                        </form>
                            

                    </div>
                </div>
        </div> 
    </div>
</div>
                
          
@endsection
