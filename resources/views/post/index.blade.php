@extends('layout')
@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>


<?php  if(Auth::check()){?>
 
    <div class="pt-15 w-4/5 m-auto">
        <a 
        href="/post-create"
            class="btn btn-success "style="margin-left:60px;margin-bottom:20px;">
            Create post
        </a>
    </div>
    <br>
<?php } else { ?>
    <div class="pt-15 w-4/5 m-auto">
        <a 
        href="/login"
            class="btn ml-10 btn-success" style="margin-left:10px;margin-bottom:20px;">
            Sign In to Create Post
        </a>
    </div>
    <br>
<?php }?>




<?php  if(Auth::check()){   ?>
    <form  method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                            
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
<?php }  ?>
 


@foreach ($post as $post)
<div class="container">
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto  border-b border-gray-200" >
        <div class="classcon" style="margin-top: 20px;">
            <img src="{{asset('/storage/images/'. $post->image)}}"   width="1000" height="500" class='img img-responsive' alt="no image"   width="100%" height="50">
        </div>
    
        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{ $post->title }}
            </h2>

            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800"> {{ $post->name }}</span> Created_at {{ $post->created_at }} and Updated_at{{$post->updated_at}}
            </span>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                <!-- {{ $post->description }} -->
                {{Str::limit($post->description, 50)}}
            </p>
            <a href="/post-show/{{ $post->id }}" class="uppercase btn btn-info">
                Keep Reading
            </a>
           <?php  if(Auth::check()){?>
                <span class="float-right">
                    <a 
                        href="/post-edit/{{ $post->id }}"
                        class="btn btn-sm btn-secondary " >
                        Edit
                    </a>
                    <?php }  ?>
                    <?php  if(Auth::check()){   ?>
                    <a 
                        href="/post-delete/{{ $post->id }}"
                        class="btn btn-sm btn-danger " >
                        Delete
                    </a>
                </span>
                </div>
                <?php }  ?>
                <small class="float-right">
                    <span title="Likes" id="saveLikeDislike" data-type="like" data-post="{{$post->id}}" class="mr-2 btn btn-sm btn-outline-primary d-inline font-weight-bold">
                        Like
                        <span class="like-count">{{$post->likes()}}</span>
                    </span>

                    <span title="Dislikes" id="saveLikeDislike" data-type="dislike" data-post="{{$post->id}}" class="mr-2 btn btn-sm btn-outline-danger d-inline font-weight-bold">
                        Dislike
                        <span class="like-count">{{$post->dislikes()}}</span>
                    </span>
                </small>


                
                <!-- <span class="float-right">
                     <form 
                        action="/post-delete/{{ $post->id }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="text-red-500 pr-3"
                            type="submit">
                            Delete
                        </button>

                    </form>
                </span> -->
           
        </div>
    </div>    
@endforeach 
<br>
<br>

 
 <script>

$(document).on('click', '#saveLikeDislike', function(){

var _post=$(this).data('post'); 
var _type=$(this).data('type');

var vm=$(this);
 // Run Ajax

$.ajax({

url:"{{ url('save-likedislike') }}",

type: "post",
dataType: 'json',

data: {

post: _post,

type:_type,

_token: "{{ csrf_token() }}"
},
beforeSend:function(){
     vm.addClass('disabled');
},
success:function(res){

if(res.bool==true){

vm.removeClass('disabled').addClass('active')

vm.removeAttr('id');
 var _prevCount=$("."+_type+"-count").text();

 
 _prevCount++;
 
 $("."+_type+"-count").text(_prevCount);

}
}
});
});


    </script>
 @stop





 








