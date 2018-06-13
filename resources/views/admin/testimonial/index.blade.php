@extends('layouts.admin')
  @section('content')
<h3 class="inner-tittle two">Testimonials</h3>
<a href="{{ route('testimonial.create') }}" class="btn btn-info">Add New Testimonial</a>
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
        <table class="table table-hover" id="testimonial-table">
            <thead> 
                <tr> 
                    <th>No.</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Show Status</th>
                    <th>Action</th>
                </tr> 
            </thead> 
        </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#testimonial-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('testimonial.gettestimonial') }}",
        "columns": [
            {data: 'rownum', name: 'rownum'},
            {data: 'name', name: 'name'},
            {data: 'description', name: 'description'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
    $('#testimonial-table').DataTable().on('click', '.delete-designation', function (e) {
       return confirm('Are you sure to delete this');
    });
});
</script>
@stop