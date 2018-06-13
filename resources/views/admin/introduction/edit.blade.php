@extends('layouts.admin')
  @section('content')
  <style>
      .img-des{margin-top: 25px;}
      .image-view{text-align: center;}
  </style>
@php $img_array = explode(",",$introduction['image']);@endphp
@php $img_des_array = explode(",",$introduction['image_description']);@endphp
<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Edit Introduction</h3>
        <div class="grid-1">
            <div class="form-body">
                <form action="{{route('introduction.update',$introduction->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-8">
                            <textarea rows="5" cols="30" class="form-control1" id="description" name="description" required>{{$introduction->description}}</textarea>
                            {!! $errors->first('description','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    
                    
                    <div class="form-group"> 
                       <label class="col-sm-2 control-label">Image List</label> 
                       <div class="col-sm-8">
                        @foreach($img_array as $key=>$img)
                            <?php $did = getFileName($img); ?>
                            <div class="col-sm-6">
                                <input type="hidden" value="<?php echo $img; ?>"  name="old_img[]"/>
                                <input type="hidden" value="<?php echo $img_des_array[$key]; ?>"  name="old_img_des[]"/>
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
                                      <tr>
                                        <td><button type="button" class="btn btn-danger remove-photo-db" id="<?php echo $did; ?>">Remove</button></td>
                                      </tr>
                                    </tbody>
                                </table>
                            </div>
                        @endforeach
                       </div>
                    </div>
                    
                    <div class="form-group" id="f1"> 
                        <label class="col-sm-2 control-label">Photo</label> 
                        <div class="col-sm-4" >
                            <input type="file" class="filestyle" data-placeholder="No file" name="image[]" placeholder="Select Your Photo">
                            <input type="text" class="form-control1 img-des" id="image_description" name="image_description[]">
                        </div>

                        <div class="col-sm-2" id='file_tools'>
                            <button type="button" class="btn btn-default add-photo">Add New</button>
                        </div>
                    </div>
                    
                    <div id="new-img"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-8">
                            <div class="radio-inline"><label><input type="radio" name="status" value="1" id="active" @if($introduction->status == '1'){{'checked'}}@endif > Active</label></div>
                            <div class="radio-inline"><label><input type="radio" name="status" value="0" id="inactive" @if($introduction->status == '0'){{'checked'}}@endif> Inactive</label></div>
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
    $(document).on("click",".remove-photo-db",function() {
        confirm('Are you sure to delete this');
        $(this).closest("div").remove();
        //$(this).siblings('input:hidden');
    });
    var counter = 2;
    $(document).on("click",".add-photo",function() {
        $('#new-img').before('<div class="form-group" id="f'+counter+'"><label class="col-sm-2 control-label">Photo '+counter+'</label><div class="col-sm-4"><input type="file" class="filestyle" data-placeholder="No file" name="image[]" placeholder="Select Your Photo"><input type="text" class="form-control1 img-des" id="image_description" name="image_description[]"></div><div class="col-sm-4" id="file_tools"><div class="col-sm-4"><button type="button" class="btn btn-default add-photo">Add New</button></div><div class="col-sm-4"><button type="button" class="btn btn-danger remove-photo">Remove</button></div></div></div>');
        counter++;
    });
    $(document).on("click",".remove-photo",function() {
        counter--;
        $('#f'+counter).remove();
    });
   
});    
</script>
@stop