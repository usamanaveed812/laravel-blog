
@extends('layout')
@section('content')




<!-- 
    <div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl"style="margin-top:20px">
            {{ $post->title }}
        </h1>
    </div>
</div>
<div class="sm:grid grid-cols-1 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200" >
        
            <img src="{{asset('/storage/images/'. $post->image)}}" class="mt-20" alt="no image"  width="100%" height="300px">
        </div>
<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->name }}</span>, Created_at{{$post->created_at}},Updated_at{{$post->updated_at}}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
</div>

















@foreach($comments as $comment)
<div class="display-comment">
    <strong>{{ $comment->name }}</strong>
    <p>{{ $comment->comment }}</p>
</div>
@endforeach
<br>
    <a href="" id="reply"></a>
    <form method="post" action="">
        @csrf
        <div class="form-group">
            <input type="text" name="comment" class="form-control" />
            <input type="hidden" name="post_id" value="{{ $comment->post_id }}" />
            <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Reply" />
        </div>
    </form>
</div>
  



                    <form method="post" action="/comment-storecomment" style="margin:auto ;">
                        @csrf
                       <div class="row" style="margin-left:10px ;  margin-right:10px">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Enter Your Name" style="width:500px"`></input>
                           
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Enter Your Email" style="width:500px"`></input>
                           
                        </div>
                       </div>
                        <div class="form-group" style="margin-left:10px">
                            <textarea class="form-control" name="body" placeholder="Enter Your Comments" style="margin: left 30px;"`></textarea>
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Add Comment" style="margin-left:10px"/>
                        </div>
                    </form> -->
   



   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="card"> -->
            <div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl"style="margin-top:20px">
            {{ $post->title }}
        </h1>
    </div>
</div>
            <div class="sm:grid grid-cols-1 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200" >
        
        <img src="{{asset('/storage/images/'. $post->image)}}" class="mt-20" alt="no image"  width="100%" height="300px">
    </div>
<div class="w-4/5 m-auto pt-20">
<span class="text-gray-500">
    By <span class="font-bold italic text-gray-800">{{ $post->name }}</span>, Created_at{{$post->created_at}},Updated_at{{$post->updated_at}}
</span>
                <div class="card-body">
                    <p><b>{{ $post->title }}</b></p>
                    <p>
                        {{ $post->description }}
                    </p>
                    <hr />
                    <br>
                  

                    <h1 style="font-size:2.5em">Display Comments</h1>
                    <br>
                    @foreach($comments as $comment)
                        <div class="display-comment">
                            <strong>{{ $comment->name }}</strong>
                            <p>{{ $comment->comment }}</p>
                        </div>
                    @endforeach
                    <hr />
                    <br>
                    <h4>Add comment</h4> 

                    <form method="post" action="/comment-storecomment">
                        @csrf
                        <div class="form-group">
                        <input type="text" name="name" placeholder="Enter your name" class="form-control" />
                            <textarea type="text" name="comment_body" class="form-control" placeholder="Enter your comment"></textarea>
                            <input type="hidden" name="post_id" value="{{ $post->id }}"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-warning" value="Add Comment" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





@stop