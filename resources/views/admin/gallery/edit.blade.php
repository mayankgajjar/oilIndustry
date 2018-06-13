@extends('layouts.admin')
  @section('content')
<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Edit Photo</h3>
        <div class="grid-1">
            <div class="form-body">
                <form action="{{route('gallery.update',$gallery->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="title" name="title" placeholder="Oil Industry" required value="{{$gallery->title}}">
                            {!! $errors->first('title','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-8">
                            <textarea rows="5" cols="30" class="form-control1" id="description" name="description" required>{{$gallery->description}}</textarea>
                            {!! $errors->first('description','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="col-sm-2 control-label">Photo</label> 
                        <div class="col-sm-4">
                            <input type="file" class="filestyle" data-placeholder="No file" name="image" required placeholder="Select Your Photo">
                        </div>
                        <div class="col-sm-4">
                            <img src='{{ URL::asset('/gallery_images/'.$gallery->image_name) }}' class="img-rounded" alt="Cinque Terre" width="300" height="150" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-8">
                            <div class="radio-inline"><label><input type="radio" name="status" value="1" id="active" @if($gallery->status == '1'){{'checked'}}@endif > Active</label></div>
                            <div class="radio-inline"><label><input type="radio" name="status" value="0" id="inactive" @if($gallery->status == '0'){{'checked'}}@endif> Inactive</label></div>
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
<script>
$( document ).ready(function() {
    $(":file").filestyle({placeholder: "No file"});
});    
</script>
@stop