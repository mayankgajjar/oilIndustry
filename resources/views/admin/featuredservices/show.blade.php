
@extends('layouts.admin')
  @section('content')
  <style>
      .offer-icon{font-size: 50px;}
  </style>
<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Show Featured Service</h3>
        <div class="grid-1">
            <div class="form-body">
                <div class="row"> 
                    <label class="col-sm-2 control-label"><strong>Image :</strong></label> 
                    <div class="col-sm-8">
                        <img src='{{ URL::asset('/featuredservice_images/'.$fservices['image']) }}' class="img-rounded" alt="Cinque Terre" width="250" height="200" >
                    </div>
                </div>
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Title :</strong></label>
                    <div class="col-sm-8">
                        {{$fservices['title']}}
                    </div>
                </div>
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Description :</strong></label>
                    <div class="col-sm-8">
                        {{$fservices['description']}}
                    </div>
                </div>
                 <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Icon :</strong></label>
                    <div class="col-sm-8 offer-icon">
                        <i class ="{{$fservices['icon']}}"></i>
                    </div>
                </div>
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Website Show :</strong></label>
                    <div class="col-sm-8">
                        @if($fservices['show_status'] == '1')
                            {{'Yes'}}
                        @else
                            {{'No'}}
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 control-label"><strong>Status :</strong></label>
                    <div class="col-sm-8">
                        @if($fservices['status'] == '1')
                            {{'Active'}}
                        @else
                            {{'Inactive'}}
                        @endif   
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 control-label">&nbsp;</label>
                    <div class="col-sm-8">
                        <a href="{{ route('featuredservices.index') }}" class="btn btn-info">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop