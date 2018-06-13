
@extends('layouts.admin')
  @section('content')
<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Show Service</h3>
        <div class="grid-1">
            <div class="form-body">
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Title :</strong></label>
                    <div class="col-sm-8">
                        {{$service['title']}}
                    </div>
                </div>
                <div class="row"> 
                    <label class="col-sm-2 control-label"><strong>Image :</strong></label> 
                    <div class="col-sm-8">
                        <img src='{{ URL::asset('/service_images/'.$service['image']) }}' class="img-rounded" alt="Cinque Terre" width="250" height="200" >
                    </div>
                </div>
                 <div class="row"> 
                    <label class="col-sm-2 control-label"><strong>Note :</strong></label> 
                    <div class="col-sm-8">
                        {{$service['service_status']}}
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 control-label"><strong>Status :</strong></label>
                    <div class="col-sm-8">
                        @if($service['status'] == '1')
                            {{'Active'}}
                        @else
                            {{'Inactive'}}
                        @endif   
                    </div>
                </div>
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Website Show :</strong></label>
                    <div class="col-sm-8">
                        @if($service['show_status'] == '1')
                            {{'Yes'}}
                        @else
                            {{'No'}}
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 control-label">&nbsp;</label>
                    <div class="col-sm-8">
                        <a href="{{ route('services.index') }}" class="btn btn-info">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop