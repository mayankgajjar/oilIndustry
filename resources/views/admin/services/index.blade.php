@extends('layouts.admin')
  @section('content')
<h3 class="inner-tittle two">Service</h3>
<a href="{{ route('services.create') }}" class="btn btn-info">Add New Service</a>
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
        <table class="table table-hover" id="services-table"> 
            <thead> 
                <tr> 
                    <th>No.</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Show Status</th>
                    <th>Action</th>
                </tr> 
            </thead> 
        </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#services-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('services.getservices') }}",
        "columns": [
            {data: 'rownum'},
            {data: 'title'},
            {data: 'status'},
            {data: 'show_status'},
            {data: 'action', orderable: false, searchable: false}
        ]
    });
    $('#services-table').DataTable().on('click', '.delete-service', function (e) {
        return confirm('Are you sure to delete this');
    });
});
</script>
@stop