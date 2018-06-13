@extends('layouts.admin')
  @section('content')
<h3 class="inner-tittle two">Subscribers</h3>
<a href="{{ route('subscribers.create') }}" class="btn btn-info">Create New Template</a>
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
        <table class="table table-hover" id="subscribers-table"> 
            <thead> 
                <tr> 
                    <td>No.</td>
                    <th>Email</th>
                    <th>Created Date</th>
                </tr> 
            </thead> 
        </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#subscribers-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('subscribers.getsubscribers') }}",
        "columns": [
            {data: 'rownum', name: 'rownum'},
            {data: 'email', name: 'email'},
            {data: 'created_at', name: 'created_at'},
        ]
    });
});
</script>
@stop