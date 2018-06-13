@extends('layouts.admin')
  @section('content')
<h3 class="inner-tittle two">News</h3>
<a href="{{ route('news.create') }}" class="btn btn-info">Add New News</a>
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
        <table class="table table-hover" id="news-table"> 
            <thead> 
                <tr> 
                    <th>No.</th>
                    <th>News Title</th>
                    <th>News Date</th>
                    <th>Action</th>
                </tr> 
            </thead> 
        </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#news-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('news.getnews') }}",
        "columns": [
            {data: 'rownum', name: 'rownum'},
            {data: 'title', name: 'title'},
            {data: 'news_date', name: 'news_date'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
    $('#news-table').DataTable().on('click', '.delete-news', function (e) {
        return confirm('Are you sure to delete this');
    });
});
</script>
@stop