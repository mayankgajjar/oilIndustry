
@extends('layouts.admin')
  @section('content')
<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Show News</h3>
        <div class="grid-1">
            <div class="form-body">
                <div class="row"> 
                    <label class="col-sm-2 control-label"><strong>Image :</strong></label> 
                    <div class="col-sm-8">
                        <img src='{{ URL::asset('/news_images/'.$news['image']) }}' class="img-rounded" alt="Cinque Terre" width="200" height="250" >
                    </div>
                </div>
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Title :</strong></label>
                    <div class="col-sm-8">
                        {{$news['title']}}
                    </div>
                </div>
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Date :</strong></label>
                    <div class="col-sm-8">
                       {{$news['news_date']}}
                    </div>
                </div>
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Description :</strong></label>
                    <div class="col-sm-8">
                        {{$news['description']}}
                    </div>
                </div>
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Website Show :</strong></label>
                    <div class="col-sm-8">
                        @if($news['show_status'] == '1')
                            {{'Yes'}}
                        @else
                            {{'No'}}
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 control-label"><strong>Status :</strong></label>
                    <div class="col-sm-8">
                        @if($news['status'] == '1')
                            {{'Active'}}
                        @else
                            {{'Inactive'}}
                        @endif   
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 control-label">&nbsp;</label>
                    <div class="col-sm-8">
                        <a href="{{ route('news.index') }}" class="btn btn-info">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop