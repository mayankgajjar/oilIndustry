@extends('layouts.admin')
  @section('content')
<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Create New Template</h3>
        <div class="grid-1">
            <div class="form-body">
                <form action="{{route('subscribers.send')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea id="editor1" class="ckeditor" name="template"></textarea>  
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-default">Send</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<script>
$( document ).ready(function() {
    CKEDITOR.replace( 'editor1' );
});    
</script>
@stop