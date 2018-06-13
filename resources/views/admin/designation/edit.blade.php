@extends('layouts.admin')
  @section('content')
<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Edit Designations</h3>
        <div class="grid-1">
            <div class="form-body">
              
                <form action="{{route('designation.update',$designation->id)}}" method="post" class="form-horizontal">
                <input name="_method" type="hidden" value="PATCH">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="name" name="name" placeholder="Supervisor" required value="{{$designation->designations_name}}">
                            {!! $errors->first('name','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-8">
                            <div class="radio-inline"><label><input type="radio" name="status" value="1" id="active" @if($designation->designations_status == '1'){{'checked'}}@endif > Active</label></div>
                            <div class="radio-inline"><label><input type="radio" name="status" value="0" id="inactive" @if($designation->designations_status == '0'){{'checked'}}@endif> Inactive</label></div>
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