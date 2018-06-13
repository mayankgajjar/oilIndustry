@extends('layouts.admin')
  @section('content')
<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Edit Contact Information</h3>
        <div class="grid-1">
            <div class="form-body">
                <form action="{{route('contactinfo.update',$info->id)}}" method="post" class="form-horizontal">
                <input name="_method" type="hidden" value="PATCH">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-8">
                            <textarea rows="5" cols="30" class="form-control1" id="address" name="address" required>{{$info->address}}</textarea>
                            {!! $errors->first('address','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Phone Number</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="phone" name="phone" placeholder="(+012) 345 6432" value="{{$info->phone}}" >
                            {!! $errors->first('phone','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Fax</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="fax" name="fax" placeholder="+82-21-1218" value="{{$info->fax}}" required>
                            {!! $errors->first('fax','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control1" id="email" name ="email" placeholder="info@example.com" value="{{$info->email}}" required>
                            {!! $errors->first('email','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Website</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="website" name="website" placeholder="http://Oilw3layouts.com" value="{{$info->website}}" required>
                            {!! $errors->first('website','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">&nbsp;</label>
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                    
                </form>
            </div>

        </div>
    </div>
</div>

@stop