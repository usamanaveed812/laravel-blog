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
  <h2>New Category</h2>
       <div class="row">
           <div class="col-sm-4">
<form method="POST" action="/category-store">
    @csrf
<label>Title</label>
<input type="text"  id="txtName" name="title" class="form-control"
 value="{{old('title')}}"/>
@if($errors->has('title'))
<p class="text-danger">{{$errors->first('title')}}</p>
@endif
<button class="btn btn-info mt-4" type="submit">Create</button>
</form>


           </div>
       </div>

           
  
</div>

</body>
<!-- <script type="text/javascript">
    function ValidateTextBox() {
        if (document.getElementById("txtName").value.trim() == "") {
            alert("Field is required");
            return false;
        }
    };
</script> -->
</html>
