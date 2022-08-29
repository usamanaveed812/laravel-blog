@extends('master')
@section('title','Edit Post')
@section('content')
<div class="container-fluid px-4">
<div class="card mt-4">
<div class="card-header">
<h4>Edit Post
    <a href="{{url('posts')}}" class="btn btn-primary float-end">Back</a>
</h4>
</div>
<div class="card-body">
    <form action="{{url('update-post/').$post->id}}" method="POST">
        @method('PUT')
        @csrf
        <label style="margin-top: 20px;">Title</label>
        <input type="text" name="title" class="form-control" value="{{ $post->title}}"/>
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{ $post->name}}"/>
        <label>Description</label>
        <textarea class="form-control" style="height:150px" name="description" placeholder="description" value="{{$post->description}}"></textarea>
        <label>Upload Pic</label>
        <input type="file" name="image" value="{{$post->image}}"/>
        <br>
        <label for="">Status</label>
              <input type="checkbox" name="status"  value="{{$post->status}}"/>
              <br>
        <button class="btn btn-info mt-4" type="submit">Update</button>
        </form>

</div>
</div>
</div>
@endsection





