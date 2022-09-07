
  @extends('master')
@section('title','Add Post')
@section('content')
<div class="container-fluid px-4">
<div class="card mt-4">
<div class="card-header">
<h4>New Post
    <!-- <a href="" class="btn btn-primary float-end">Add Posts</a> -->
</h4>
</div>
<div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
    <form action="{{url('add-post')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <label style="margin-top: 20px;">Title</label>

        <input type="text"  id="txtName" name="title" class="form-control">
        <label>Name</label>
        <input type="text"  id="txtName" name="name" class="form-control">
         
        
        
        <label>Description</label>
        <textarea class="form-control" style="height:150px" name="description" placeholder="Description" class="form-control"></textarea>
        
        <label>Upload Pic</label>
        <input type="file" name="image" class="form-control"/>
        <br>
        
        <label for="">Status</label>
        <input type="checkbox" name="status"/>
        <br>
        <button class="btn btn-info mt-4" type="submit">Create Post</button>
        </form>
        

</div>
</div>
</div>
@endsection



