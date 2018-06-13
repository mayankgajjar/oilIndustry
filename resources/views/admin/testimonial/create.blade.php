@extends('layouts.admin')
  @section('content')
<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Add New Testimonial</h3>
        <div class="grid-1">
            <div class="form-body">
                <form action="{{route('testimonial.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="postpage" value="backend"/>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="name" name="name" required placeholder="Full Name">
                            {!! $errors->first('name','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control1" id="email" name="email" required placeholder="demo@example.com">
                            {!! $errors->first('email','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Designation</label>
                        <div class="col-sm-8">
                            <select name="designation" id="designation" class="form-control1">
                                <option>Select Designation</option>
                                @foreach($designation as $desig)
                                    <option value="{{$desig['id']}}">{{$desig['designations_name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="col-sm-2 control-label">Photo</label>
                        <div class="col-sm-8">
                            <input type="file" class="filestyle" data-placeholder="No file" name="image" required placeholder="Select Your Photo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-8">
                            <textarea rows="5" cols="30" class="form-control1" id="message" name="message" required></textarea>
                            {!! $errors->first('message','<p class="help-block">:message</p>') !!}
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