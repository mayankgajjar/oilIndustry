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
            <table class="table table-hover"> 
                <thead> 
                    <tr> 
                        <th>No.</th>
                        <th>Designation Name</th>
                        <th>Designation Status</th>
                        <th>Designation CreatedDate </th>
                        <th>&nbsp;</th>
                    </tr> 
                </thead> 
                <tbody> 
                   <?php $i=1; ?>
                     @foreach($designation as $desig)
                        <tr>
                            <th>{{$i}}</th>
                            <td>{{$desig['designations_name']}}</td>
                            <td>
                                @if($desig['designations_status'] == '1')
                                    {{'Active'}}
                                @else
                                    {{'Inactive'}}
                                @endif                  
                            </td>
                            <td>{{$desig['created_at']}}</td>
                            <td>
                               <a href="{{ route('routedesignation.edit', $desig['id']) }}"><i class="fa fa-pencil-square-o" title = "Edit Designation"></i></a> &nbsp;
                               <a href="{{ route('designation.delete', $desig['id']) }}" onclick="return confirm('Are you sure to delete this');" ><i class="fa fa-trash-o" title = "Delete Designation"></i></a>
                            </td>
                        </tr>
                    <?php $i++; ?>
                    @endforeach
                </tbody> 
            </table>
    </div>
</div>
@stop