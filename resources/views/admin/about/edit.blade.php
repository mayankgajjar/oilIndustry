@extends('layouts.admin')
  @section('content')
<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Edit About Us</h3>
        <div class="grid-1">
            <div class="form-body">
                <form action="{{route('about.update',$about->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-8">
                            <textarea rows="5" cols="30" class="form-control1" id="description" name="description" required>{{$about->description}}</textarea>
                            {!! $errors->first('description','<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Facebook Link</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="facebook" name="facebook" value="{{$about->facebook_link}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">Twitter Link</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="twitter" name="twitter" value="{{$about->twitter_link}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2 control-label">RSS Link</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" id="rss" name="rss" value="{{$about->rss_link}}">
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