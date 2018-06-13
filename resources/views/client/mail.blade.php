@extends('layouts.website')
  @section('content')
  <!-- //banner -->
    <div class="banner1">
        <div class="w3layouts_banner1_info"><h2>Mail Us</h2></div>
    </div>
    <div class="agileits_w3layouts_mail_grids">	
		<div class="col-md-7 w3l_mail_left">
			<div class="map">
			   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387145.86654334463!2d-74.25818682528057!3d40.70531100753592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1497241987900"  allowfullscreen></iframe>

			</div>
		</div>
		<div class="col-md-5 w3l_mail_right">
			<h3>Contact Info</h3>
			<ul>
				<li><span><i class="fa fa-home" aria-hidden="true"></i>Address<label>:</label></span>{{$info->address}}</li>
				<li><span><i class="fa fa-phone" aria-hidden="true"></i>Phone<label>:</label></span> {{$info->phone}}</li>
				<li><span><i class="fa fa-fax" aria-hidden="true"></i>Fax<label>:</label></span> {{$info->fax}}</li>
				<li><span><i class="fa fa-envelope" aria-hidden="true"></i>Email<label>:</label></span>{{$info->email}}</li>
				<li><span><i class="fa fa-globe" aria-hidden="true"></i>Website<label>:</label></span> <a href="{{$info->website}}">{{$info->website}}</a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="banner-bottom">
		<div class="container">
		 <h3 class="w3l_header">Get in touch with us</h3>
			<p class="quia">Oil Industry </p>
			
			<div class="agileinfo_mail_grids">
				<form action="{{url('sendmail')}}" method="post" >
                                    {{csrf_field()}}
					<span class="input input--chisato">
						<input class="input__field input__field--chisato" name="Name" type="text" id="input-13" placeholder="Name"/>
                                                {!! $errors->first('Name','<p class="help-block">:message</p>') !!}
					</span>
					<span class="input input--chisato">
						<input class="input__field input__field--chisato" name="Email" type="email" id="input-14" placeholder="Email" required="" />
                                                {!! $errors->first('Email','<p class="help-block">:message</p>') !!}
					</span>
					<span class="input input--chisato">
						<input class="input__field input__field--chisato" name="Subject" type="text" id="input-15" placeholder="Subject" required="" />
                                                {!! $errors->first('Subject','<p class="help-block">:message</p>') !!}
					</span>
					<textarea name="Message" placeholder="Comment..." required=""></textarea>
                                        {!! $errors->first('Message','<p class="help-block">:message</p>') !!}
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>
@stop