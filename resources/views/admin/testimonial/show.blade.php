
@extends('layouts.admin')
  @section('content')
<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">View Testimonial</h3>
        <div class="grid-1">
            <div class="form-body">
                    <div class="row">
                        <label class="col-sm-2 control-label"><strong>Photo</strong></label>
                        <div class="col-sm-8">
                            <img src='{{ URL::asset('/testimonial_images/'.$testimonials->image) }}' class="img-rounded" alt="photo" width="150" height="100" >
                        </div>
                    </div>
                    <div class="row">
                        <label  class="col-sm-2 control-label"><strong>Name</strong></label>
                        <div class="col-sm-8">
                            {{$testimonials->name}}
                        </div>
                    </div>
                    <div class="row">
                        <label  class="col-sm-2 control-label"><strong>Email</strong></label>
                        <div class="col-sm-8">
                            {{$testimonials->email}}
                        </div>
                    </div>
                    <div class="row">
                        <label  class="col-sm-2 control-label"><strong>Designation</strong></label>
                        <div class="col-sm-8">
                            {{$testimonials->designations_name}}
                        </div>
                    </div>
                    <div class="row">
                        <label  class="col-sm-2 control-label"><strong>Description<strong></label>
                        <div class="col-sm-8">
                            {{$testimonials->description}}
                        </div>
                    </div>
                    <div class="row">
                        <label  class="col-sm-2 control-label"><strong>Website Show Status</strong></label>
                        <div class="col-sm-8">
                            @if($testimonials->status == '1'){{'Yes'}} @else {{'No'}} @endif
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 control-label">&nbsp;</label>
                        <div class="col-sm-8">
                            <a href="{{ route('testimonial.index') }}" class="btn btn-info">Back</a>
                        </div>
                    </div>
                    
                </form>
            </div>

        </div>
    </div>
</div>
@stop