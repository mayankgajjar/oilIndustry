@extends('layouts.admin')
  @section('content')
  <?php   /*echo '<pre>';
        print_r($gallery);
        die;*/ ?>
<h3 class="inner-tittle two">Gallery</h3>
<a href="{{ route('gallery.create') }}" class="btn btn-info">Add New Photo</a>
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
            <table class="table table-hover" id="gallery-table"> 
                <thead> 
                    <tr> 
                        <th>No.</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr> 
                </thead> 
            </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    
        oTable = $('#gallery-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('gallery.getgallery') }}",
        "columns": [
            {data: 'rownum'},
            {data: 'title'},
            {data: 'description'},
            {data: decodeHTMLEntities(image_name)},
            //{data: 'image_name', name: '<img src= width="200" height="100" />'},
            {data: 'status'},
            {data: 'action', orderable: false, searchable: false}
        ],
    });
   $('#gallery-table').DataTable().on('click', '.delete-designation', function (e) {
      return confirm('Are you sure to delete this');
   });
});

function decodeHTMLEntities(text) {
alert(text);
    var entities = [
        ['amp', '&'],
        ['apos', '\''],
        ['#x27', '\''],
        ['#x2F', '/'],
        ['#39', '\''],
        ['#47', '/'],
        ['lt', '<'],
        ['gt', '>'],
        ['nbsp', ' '],
        ['quot', '"']
    ];

    for (var i = 0, max = entities.length; i < max; ++i) 
        text = text.replace(new RegExp('&'+entities[i][0]+';', 'g'), entities[i][1]);

    return text;
}
</script>
@stop