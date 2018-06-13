@extends('layouts.admin')
  @section('content')
<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Edit Testimonial</h3>
        <div class="grid-1">
            <div class="form-body">
                <form action="{{route('testimonial.update',$testimonials->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
                {{csrf_field()}}
                
                    <div class="row">
                        <label class="col-sm-2 control-label">Photo</label>
                        <div class="col-sm-8">
                            <img src='{{ URL::asset('/testimonial_images/'.$testimonials->image) }}' class="img-rounded" alt="photo" width="150" height="100" >
                        </div>
                    </div>
                    <div class="row">
                        <label  class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-8">
                            {{$testimonials->name}}
                        </div>
                    </div>
                    <div class="row">
                        <label  class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-8">
                            {{$testimonials->email}}
                        </div>
                    </div>
                    <div class="row">
                        <label  class="col-sm-2 control-label">Designation</label>
                        <div class="col-sm-8">
                            {{$testimonials->designations_name}}
                        </div>
                    </div>
                    <div class="row">
                        <label  class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-8">
                            {{$testimonials->description}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Website Show Status</label>
                        <div class="col-sm-8">
                            <div class="radio-inline"><label><input type="radio" name="status" value="1" id="status_yes"  @if($testimonials->status == '1'){{'checked'}} @endif> Yes</label></div>
                            <div class="radio-inline"><label><input type="radio" name="status" value="0" id="status_no" @if($testimonials->status == '0'){{'checked'}} @endif> No</label></div>
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