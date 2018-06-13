@extends('layouts.admin')
  @section('content')
<h3 class="inner-tittle two">Featured Services</h3>
<a href="{{ route('featuredservices.create') }}" class="btn btn-info">Add New Service</a>
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
        <table class="table table-hover" id="offer-table"> 
            <thead> 
                <tr> 
                    <td>No.</td>
                    <th>Title</th>
                    <th>description</th>
                    <th>Show on Website</th>
                    <th>Action</th>
                </tr> 
            </thead> 
        </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#offer-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('featuredservices.getfservices') }}",
        "columns": [
            {data: 'rownum'},
            {data: 'title'},
            {data: 'description'},
            {data: 'show_status'},
            {data: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
@stop