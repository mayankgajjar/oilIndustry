
@extends('layouts.admin')
  @section('content')
<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Show About Us</h3>
        <div class="grid-1">
            <div class="form-body">
                <div class="row"> 
                    <label class="col-sm-2 control-label"><strong>Description :</strong></label> 
                    <div class="col-sm-8">
                        {{$about['description']}}
                    </div>
                </div>
               
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Facebook Link :</strong></label>
                    <div class="col-sm-8">
                        {{$about['facebook_link']}}
                    </div>
                </div>
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Twitter Link :</strong></label>
                    <div class="col-sm-8">
                        {{$about['twitter_link']}}
                    </div>
                </div>
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>RSS Link :</strong></label>
                    <div class="col-sm-8">
                        {{$about['rss_link']}}
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 control-label">&nbsp;</label>
                    <div class="col-sm-8">
                        <a href="{{ route('about.index') }}" class="btn btn-info">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop