@extends('layouts.login')

@section('content')		
<!--/login-->						
    <div class="error_page">
        <!--/login-top-->
                <div class="error-top up">
                <h2 class="inner-tittle page"> OIL INDUSTRY </h2>
                    <div class="login">
                        <h3 class="inner-tittle t-inner">Sign Up</h3>
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}"> {{ csrf_field() }}
                                    <input id="name" type="text"  class="text" name="name"  value="{{ old('name') }}" required autocomplete="off" placeholder="Your Name">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <p>{{ $errors->first('name') }}</p>
                                        </span>
                                    @endif
                                    <input id="email" type="text" class="text" name="email" value="{{ old('email') }}"  required autocomplete="off" placeholder="Email Address">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <p>{{ $errors->first('email') }}</p>
                                        </span>
                                    @endif
                                    <input id="password" type="password" value="" name="password"  required placeholder="Password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <p>{{ $errors->first('password') }}</p>
                                        </span>
                                    @endif
                                    <input id="password-confirm" type="password" value=""  name="password_confirmation" required placeholder="Password Confirmation">
                                    
                                    <select name="roll" id="roll" class="form-control1" required>
                                        <option value="">Select Roll</option>
                                        <option value="1">Admin</option>
                                        <option value="2">User</option>
                                    </select>
                                   
                                    <div class="submit"><input type="submit" value="Sign up" ></div> 
                                    <div class="clearfix"></div>
                                    <div class="new">
                                        <p class="sign up">Do you have an account yet ? <a href="{{ route('login') }}"> Login here.</a></p>
                                        <div class="clearfix"></div>
                                    </div>
                            </form>
                        </div>
                </div>
        <!--//login-top-->
    </div>
        <!--//login-->
    <!--footer section start-->
    <div class="footer">
        <p>&copy 2016 Augment . All Rights Reserved | Design by <a href="http://www.narolainfotech.com/" target="_blank">Narola Infotech.</a></p>
    </div>
<!--footer section end-->
<!--/404-->
@endsection
