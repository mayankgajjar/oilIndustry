@extends('layouts.admin')
  @section('content')
<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Add New News</h3>
        <div class="grid-1">
            <div class="form-body">
                <form action="{{route('news.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="title" name="title" placeholder="Oil Industry" required>
                            {!! $errors->first('title','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-8">
                            <textarea rows="5" cols="30" class="form-control1" id="description" name="description" required></textarea>
                            {!! $errors->first('description','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="col-sm-2 control-label">Image</label>
                        <div class="col-sm-8">
                            <input type="file" class="filestyle" data-placeholder="No file" name="image" required>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-8">
                            <div class="input-append date">
                                <!--<input type="text" class="span2" name="ndate" required id="ndate"><span class="add-on"><i class="icon-th"></i></span> -->
                                <div class="input-group date">
                                    <input type="text" class="form-control" name="ndate" required id="ndate">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                </div>
                                {!! $errors->first('ndate','<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Website Show Status</label>
                        <div class="col-sm-8">
                            <div class="radio-inline"><label><input type="radio" name="show_status" value="1" id="show_yes" checked> Yes</label></div>
                            <div class="radio-inline"><label><input type="radio" name="show_status" value="0" id="show_no"> No</label></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-8">
                            <div class="radio-inline"><label><input type="radio" name="status" value="1" id="active" checked> Active</label></div>
                            <div class="radio-inline"><label><input type="radio" name="status" value="0" id="inactive"> Inactive</label></div>
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
    $('.input-append.date').datepicker({
        daysOfWeekDisabled: "0",
        autoclose: true,
        todayHighlight: true,
    });
});    
</script>
@stop