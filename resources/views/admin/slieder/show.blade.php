@extends('layouts.admin')
  @section('content')
<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Show Slieder</h3>
        <div class="grid-1">
            <div class="form-body">
                <div class="row"> 
                    <label class="col-sm-2 control-label"><strong>Image :</strong></label> 
                    <div class="col-sm-8">
                        <img src='{{ URL::asset('/slieder_images/'.$slieder['image']) }}' class="img-rounded" width="300" height="200" >
                    </div>
                </div>
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Title :</strong></label>
                    <div class="col-sm-8">
                        {{$slieder['title']}}
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 control-label"><strong>Status :</strong></label>
                    <div class="col-sm-8">
                        @if($slieder['status'] == '1')
                            {{'Active'}}
                        @else
                            {{'Inactive'}}
                        @endif   
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 control-label">&nbsp;</label>
                    <div class="col-sm-8">
                        <a href="{{ route('slieder.index') }}" class="btn btn-info">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop