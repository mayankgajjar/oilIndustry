@extends('layouts.admin')
  @section('content')
<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Edit Milestone</h3>
        <div class="grid-1">
            <div class="form-body">
                <form action="{{route('milestone.update',$milestone->id)}}" method="post" class="form-horizontal">
                <input name="_method" type="hidden" value="PATCH">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Years of Experience</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="experience" name="experience" placeholder="25" value="{{$milestone->experience}}" required>
                            {!! $errors->first('experience','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Awards</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="awards" name="awards" placeholder="100" value="{{$milestone->awards}}" required>
                            {!! $errors->first('awards','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Workers</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="workers" name="workers" placeholder="250" value="{{$milestone->workers}}" required>
                            {!! $errors->first('workers','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Companies</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="companies" name="companies" placeholder="188" value="{{$milestone->companies}}" required>
                            {!! $errors->first('companies','<p class="help-block">:message</p>') !!}
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