
@extends('layouts.admin')
  @section('content')
  <style>
      .offer-icon{font-size: 50px;}
  </style>
<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Show Offer</h3>
        <div class="grid-1">
            <div class="form-body">
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Title :</strong></label>
                    <div class="col-sm-8">
                        {{$offer['title']}}
                    </div>
                </div>
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Description :</strong></label>
                    <div class="col-sm-8">
                        {{$offer['description']}}
                    </div>
                </div>
                 <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Icon :</strong></label>
                    <div class="col-sm-8 offer-icon">
                        <i class ="{{$offer['icon']}}"></i>
                    </div>
                </div>
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Website Show :</strong></label>
                    <div class="col-sm-8">
                        @if($offer['show_status'] == '1')
                            {{'Yes'}}
                        @else
                            {{'No'}}
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 control-label"><strong>Status :</strong></label>
                    <div class="col-sm-8">
                        @if($offer['status'] == '1')
                            {{'Active'}}
                        @else
                            {{'Inactive'}}
                        @endif   
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 control-label">&nbsp;</label>
                    <div class="col-sm-8">
                        <a href="{{ route('offer.index') }}" class="btn btn-info">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop