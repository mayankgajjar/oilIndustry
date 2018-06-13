@extends('layouts.admin')
  @section('content')
  <style>
      .image-view{text-align: center;}
  </style>
<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Show Introduction</h3>
        <div class="grid-1">
            <div class="form-body">
                
                <div class="row">
                    <label  class="col-sm-2 control-label"><strong>Description :</strong></label>
                    <div class="col-sm-8">
                        {{$introduction['description']}}
                    </div>
                </div>
                @php $img_array = explode(",",$introduction['image']);@endphp
                @php $img_des_array = explode(",",$introduction['image_description']);@endphp
                <div class="row"> 
                    <label class="col-sm-2 control-label"><strong>Image :</strong></label> 
                    <div class="col-sm-8">
                        @foreach($img_array as $key=>$img)
                            <div class="col-sm-6">
                                <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th class='image-view'><img src='{{ URL::asset('/introduction_images/'.$img) }}' class="img-rounded" width="300" height="200" ></th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>{{$img_des_array[$key]}}</td>
                                      </tr>
                                    </tbody>
                                </table>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 control-label"><strong>Status :</strong></label>
                    <div class="col-sm-8">
                        @if($introduction['status'] == '1')
                            {{'Active'}}
                        @else
                            {{'Inactive'}}
                        @endif   
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 control-label">&nbsp;</label>
                    <div class="col-sm-8">
                        <a href="{{ route('introduction.index') }}" class="btn btn-info">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop