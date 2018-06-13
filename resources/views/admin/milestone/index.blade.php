@extends('layouts.admin')
  @section('content')
<h3 class="inner-tittle two">Milestone</h3>
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
        <table class="table table-hover" id="milestone-table"> 
            <thead> 
                <tr> 
                    <th>No.</th>
                    <th>Years of Experience</th>
                    <th>Awards Winning</th>
                    <th>Workers</th>
                    <th>Companies</th>
                    <th>Action</th>
                </tr> 
            </thead> 
        </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#milestone-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('milestone.getmilestone') }}",
        "columns": [
            {data: 'rownum'},
            {data: 'experience'},
            {data: 'awards'},
            {data: 'workers'},
            {data: 'companies'},
            {data: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
@stop