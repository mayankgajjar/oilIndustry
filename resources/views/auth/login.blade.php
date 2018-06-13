@extends('layouts.login')

@section('content')
<!--/login-->
								
<div class="error_page">
<!--/login-top-->
    <div class="error-top">
    <h2 class="inner-tittle page"> OIL INDUSTRY </h2>
        <div class="login">
            <h3 class="inner-tittle t-inner">Login</h3>
                 <form class="form-horizontal" method="POST" action="{{ route('login') }}"> {{ csrf_field() }}
                      @if ($errors->has('email'))
                            <span class="help-block">
                                <p>{{ $errors->first('email') }}</p>
                            </span>
                        @endif
                        <!--<input type="text" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}" > -->
                        <input type="text" class="text" name="email" value="{{ old('email') }}" required autofocus autocomplete="off">
                        <!--<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"> -->
                        <input id="password" type="password"  name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        
                        <select name="roll" id="roll" class="form-control1" required>
                            <option value="">Select Roll</option>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
                        
                        <div class="submit"><input type="submit" value="Login" ></div>
                        <div class="clearfix"></div>

                        <div class="new">
                            <p><label class="checkbox11"><input type="checkbox" name="checkbox"><i> </i><a href="{{ route('password.request') }}">Forgot Password ?</a></label></p>
                                <p class="sign">Do not have an account ? <a href="{{ route('register') }}">Sign Up</a></p>
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
