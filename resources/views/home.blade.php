@extends('layouts.admin')

@section('content')
<div class="sub-heard-part">
    <ol class="breadcrumb m-b-0">
        <li class="active">Dashboard</li>
    </ol>
    <h3>Welcome {{ Auth::user()->name }}</h3>
</div>
@endsection
