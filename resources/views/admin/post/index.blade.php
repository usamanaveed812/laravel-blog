@extends('master')
@section('title','View Post')
@section('content')
<div class="container-fluid px-4">
<div class="card mt-4">
<div class="card-header">
<h4>View Post
    <a href="add-post" class="btn btn-primary float-end">Add Posts</a>
</h4>
</div>
<div class="card-body">
@if (session('message'))
<div class="alert alert-success">{{ session('message') }}</div>
@endif

<table id="myDataTable" class="table table-bordered">
<thead>
<tr>
<th>ID</th>
<th>Title</th>
<th>Image</th>
<th>Created-at</th>
<th>Updated-at</th>

<!-- <th>Status</th> -->
<th>Action</th>

</tr>
</thead>
<tbody>
@foreach ($post as $item)
<tr>
<td>{{ $item->id }}</td>
<td>{{ $item->title }}</td>
<td>
    <img src="{{asset($item->image)}}" width='50' height='50' class='img img-responsive'/>
</td>
<td>{{$item->created_at}}</td>
<td>{{$item->updated_at}}</td>
<!-- <td>{{ $item->status }}</td> -->
<!-- <td>{{ $item->status == '1' ? 'Hidden':'visible'}}</td> -->
<td>
<a href="{{ url('edit-post/'.$item->id) }}" class="btn btn-success">Edit</a> 
<a href="{{ url('delete-post/'.$item->id) }}" class="btn btn-danger">Delete</a> 
</td>
</tr>
@endforeach
</tbody>
</table>

</div>
</div>
</div>
@endsection