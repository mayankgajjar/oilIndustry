
@extends('layouts.admin')
  @section('content')
<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Show Member</h3>
        <div class="grid-1">
            <div class="form-body">
                <div class="row"> 
                    <label class="col-sm-2 control-label"><strong>Photo :</strong></label> 
                    <div class="col-sm-8">
                        <img src='{{ URL::asset('/team_images/'.$team['emp_photo']) }}' class="img-rounded" alt="Cinque Terre" width="200" height="250" >
                    </div>
                </div>
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Name :</strong></label>
                    <div class="col-sm-8">
                        {{$team['emp_name']}}
                    </div>
                </div>
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Designation :</strong></label>
                    <div class="col-sm-8">
                       {{$team['designations_name']}}
                    </div>
                </div>
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Facebook Link :</strong></label>
                    <div class="col-sm-8">
                        {{$team['emp_facebook_link']}}
                    </div>
                </div>
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Twitter Link :</strong></label>
                    <div class="col-sm-8">
                        {{$team['emp_twitter_link']}}
                    </div>
                </div>
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>RSS Link :</strong></label>
                    <div class="col-sm-8">
                        {{$team['emp_rss_link']}}
                    </div>
                </div>
            
                <div class="row">
                    <label class="col-sm-2 control-label"><strong>Website Show Status :</strong></label>
                    <div class="col-sm-8">
                        @if($team['emp_show_status'] == '1')
                            {{'Yes'}}
                        @else
                            {{'No'}}
                        @endif
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 control-label"><strong>Status :</strong></label>
                    <div class="col-sm-8">
                        @if($team['emp_status'] == '1')
                            {{'Active'}}
                        @else
                            {{'Inactive'}}
                        @endif   
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 control-label">&nbsp;</label>
                    <div class="col-sm-8">
                        <a href="{{ route('team.index') }}" class="btn btn-info">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop