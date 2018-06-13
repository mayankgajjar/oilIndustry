@extends('layouts.admin')
  @section('content')
<h3 class="inner-tittle two">Designation</h3>
<a href="{{ route('designation.create') }}" class="btn btn-info">Add New Designation</a>
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
            <table class="table table-hover" id="designation-table"> 
                <thead> 
                    <tr> 
                        <th>No.</th>
                        <th>Designation Name</th>
                        <th>Designation Status</th>
                        <th>Designation CreatedDate </th>
                        <th>Action</th>
                    </tr> 
                </thead> 
            </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#designation-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('designation.getdesignation') }}",
        "columns": [
            {data: 'rownum', name: 'rownum'},
            {data: 'designations_name', name: 'designations_name'},
            {data: 'designations_status', name: 'designations_status'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
   $('#designation-table').DataTable().on('click', '.delete-designation', function (e) {
      return confirm('Are you sure to delete this');
   });
});
</script>
@stop