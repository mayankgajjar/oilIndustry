@extends('layouts.admin')
  @section('content')
<h3 class="inner-tittle two">User List </h3>
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
            <table class="table table-hover" id="users-table"> 
                <thead> 
                    <tr> 
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr> 
                </thead> 
            </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    oTable = $('#users-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('userlist.getuser') }}",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
        ]
    });
});
</script>
@stop
