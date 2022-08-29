<!DOCTYPE html>
<html lang="en">
<head>
  <title>Categories</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

</head>
<body>

<div class="container">
  <h2> Categories  <a class="btn btn-info" href="/category-create">Categories</a></h2>
             
  <table class="table table-hover">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
      <tr>
        <td>{{ $loop->index+1}}</td>
        <td>{{ $category->title}}</td>
        <td>
            <a href="/category-edit/{{$category->id}}" class="btn btn-sm btn-info">Edit</a>
            <a href="/category-delete/{{$category->id}}" class="btn btn-sm btn-danger">Delete</a>
             
            <!-- <form method="post" action="/category-delete/{{$category->id}}">
            @call_user_func@method('delete') 
            
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form> -->
          </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>

</body>
</html>
