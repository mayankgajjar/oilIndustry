@extends('layouts.admin')
  @section('content')
<h3 class="inner-tittle two">Introduction</h3>
@if(Session::has('message'))
<div class="content pt0">
    <div class="alert alert-success">
        <a class="close" data-dismiss="alert">×</a>
        <strong>{{ Session::get('message') }}</strong>
    </div>
</div>
@endif
<div class="graph">
    <div class="tables">
            <table class="table table-hover" id="intro-table"> 
                <thead> 
                    <tr> 
                        <th>No.</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr> 
                </thead> 
            </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#intro-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('introduction.getintroduction') }}",
        "columns": [
            {data: 'rownum'},
            {data: 'description'},
            {data: 'status'},
            {data: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
@stop