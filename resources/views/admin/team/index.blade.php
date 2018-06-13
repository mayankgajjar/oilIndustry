@extends('layouts.admin')
  @section('content')
<h3 class="inner-tittle two">Team</h3>
<a href="{{ route('team.create') }}" class="btn btn-info">Add New Member</a>
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
            <table class="table table-hover" id="emp-table">
                <thead> 
                    <tr> 
                        <th>No.</th>
                        <th>Employee Name</th>
                        <th>Employee Designation</th>
                        <th>Employee Status</th>
                        <th>Action</th>
                    </tr> 
                </thead> 
            </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#emp-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('team.getteam') }}",
        "columns": [
            {data: 'rownum', name: 'rownum'},
            {data: 'emp_name', name: 'emp_name'},
            {data: 'designations_name', name: 'designations_name'},
            {data: 'emp_status', name: 'emp_status'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
   $('#emp-table').DataTable().on('click', '.delete-designation', function (e) {
      return confirm('Are you sure to delete this');
   });
});
</script>
@stop