@extends('layouts.admin')
  @section('content')
<h3 class="inner-tittle two">About Us</h3>
<!--<a href="{{ route('designation.create') }}" class="btn btn-info">Add New Designation</a>-->
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
        <table class="table table-hover" id="about-table"> 
            <thead> 
                <tr> 
                    <th>No.</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr> 
            </thead> 
        </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#about-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('about.getaboutus') }}",
        "columns": [
            {data: 'rownum', name: 'rownum'},
            {data: 'description', name: 'description'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
@stop