@extends('layouts.admin')
  @section('content')
<h3 class="inner-tittle two">Contact Information </h3>
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
        <table class="table table-hover" id="cinfo-table"> 
            <thead> 
                <tr> 
                    <td>No.</td>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Fax</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Action</th>
                </tr> 
            </thead> 
        </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#cinfo-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('contactinfo.getcontactinfo') }}",
        "columns": [
            {data: 'rownum', name: 'rownum'},
            {data: 'address', name: 'address'},
            {data: 'phone', name: 'phone'},
            {data: 'fax', name: 'fax'},
            {data: 'email', name: 'email'},
            {data: 'website', name: 'website'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
@stop