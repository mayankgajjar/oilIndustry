@extends('layouts.admin')
  @section('content')
<h3 class="inner-tittle two">Slieder</h3>
<a href="{{ route('slieder.create') }}" class="btn btn-info">Add New Slieder</a>
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
            <table class="table table-hover" id="slieder-table"> 
                <thead> 
                    <tr> 
                        <th>No.</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr> 
                </thead> 
            </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    
        oTable = $('#slieder-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('slieder.getslieder') }}",
        "columns": [
            {data: 'rownum'},
            {data: 'title', name: 'title'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
   $('#slieder-table').DataTable().on('click', '.delete-slieder', function (e) {
      return confirm('Are you sure to delete this');
   });
});
</script>
@stop