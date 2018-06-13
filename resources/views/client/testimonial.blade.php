@extends('layouts.website')
  @section('content')
  <!-- //banner -->
    <div class="banner1">
        <div class="w3layouts_banner1_info"><h2>Testimonial</h2></div>
    </div>
    <div class="banner-bottom">
        <div class="container">
         <h3 class="w3l_header">Write Your Words</h3>
            <p class="quia">Oil Industry </p>
            @if(Session::has('message'))
            <div class="content pt0">
                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert">×</a>
                    <strong>{{ Session::get('message') }}</strong>
                </div>
            </div>
            @endif
            <div class="agileinfo_mail_grids">
                <form action="{{url('savetestimonial')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                    <input type="hidden" name="postpage" value="client"/>
                        <span class="input input--chisato">
                            <input class="input__field input__field--chisato" name="name" type="text" id="input-13" placeholder="Name"/>
                            {!! $errors->first('name','<p class="help-block">:message</p>') !!}
                        </span>
                        <span class="input input--chisato">
                            <input class="input__field input__field--chisato" name="email" type="email" id="input-14" placeholder="Email" required="" />
                            {!! $errors->first('email','<p class="help-block">:message</p>') !!}
                        </span>
                        <span class="input input--chisato">
                            <input type="file" class="filestyle" data-icon="false" name="image" required id="image">
                            {!! $errors->first('image','<p class="help-block">:message</p>') !!}
                        </span>
                        <textarea name="message" placeholder="Comment..." required=""></textarea>
                        {!! $errors->first('message','<p class="help-block">:message</p>') !!}
                        <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
@stop