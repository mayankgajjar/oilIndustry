@extends('layouts.login')

@section('content')		
<!--/login-->						
    <div class="error_page">
        <!--/login-top-->
                <div class="error-top up">
                <h2 class="inner-tittle page"> OIL INDUSTRY </h2>
                    <div class="login">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h3 class="inner-tittle t-inner"> Reset Password </h3>
                            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">{{ csrf_field() }}
                                   
                                    <input id="email" type="text" class="text" name="email" value="{{ old('email') }}"  required autocomplete="off" placeholder="Email Address">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <p>{{ $errors->first('email') }}</p>
                                        </span>
                                    @endif
                                   
                                    <div class="submit"><input type="submit" value="Send Password Reset Link" ></div> 
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
