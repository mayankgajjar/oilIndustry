@extends('layouts.admin')
  @section('content')
<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">New Member</h3>
        <div class="grid-1">
            <div class="form-body">
                <form action="{{route('team.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="name" name="name" placeholder="Peter Parker" required>
                            {!! $errors->first('name','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Designation</label>
                        <div class="col-sm-8">
                            <select name="designation" id="designation" class="form-control1">
                                <option>Select Designation</option>
                                @foreach($designation as $desig)
                                    <option value="{{$desig['id']}}">{{$desig['designations_name']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Facebook Link</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="facebook" name="facebook">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Twitter Link</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="twitter" name="twitter">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">RSS Link</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="rss" name="rss">
                        </div>
                    </div>
                   <div class="form-group"> 
                        <label class="col-sm-2 control-label">Photo</label> 
                        <div class="col-sm-8">
                            <input type="file" class="filestyle" data-placeholder="No file" name="image" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Website Show Status</label>
                        <div class="col-sm-8">
                            <div class="radio-inline"><label><input type="radio" name="website_status" value="1" id="active" checked> Yes</label></div>
                            <div class="radio-inline"><label><input type="radio" name="website_status" value="0" id="inactive"> No</label></div>
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
@stop