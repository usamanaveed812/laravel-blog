@extends('layout')
@section('content')
<div class="container">
  <h2 style="margin-top: 20px;">Edit Post</h2>
       <div class="row">
           <div class="col-sm-4">
<form method="POST" action="/post-update/{{$post->id}}" enctype="multipart/form-data">
    @csrf
    @method('put')


   
<label style="margin-top: 20px;">Title</label>
<input type="text" name="title" class="form-control" value="{{ $post->title}}"/>
<label>Name</label>
<input type="text" name="name" class="form-control" value="{{ $post->name}}"/>
<label>Description</label>
<textarea class="form-control" style="height:150px" name="description" placeholder="description" value="{{$post->detail}}"></textarea>
<label>Upload Pic</label>
<input type="file" name="image" value="{{$post->image}}"/>
<button class="btn btn-info mt-4" type="submit">Update</button>
</form>



           </div>
       </div>

           
  
</div>

@stop