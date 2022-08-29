<!-- comment form -->
<div class="flex items-center justify-center shadow-lg my-5">

<form class="w-full max-w-x1 bg-white rounded-lg px-4 pt-2"> <div class="flex flex-wrap -mx-3 mb-6">
<h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2> 
<div class="w-full md:w-full px-3 mb-2 mt-2">
<textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="body" placeholder='Type Your Comment' required></textarea>
</div>
<div class="w-full md:w-full flex items-start md:w-full px-3">
<div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
     <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24
24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width ="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
     </svg>

     <p class="text-xs md:text-sm pt-px">Some HTML is okay.</p>

</div>

<div class="-mr-1">

<input type='submit' class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-1g tracking-wide mr-1 hover:bg-gray-100" value="Post Comment'>

</div>

</div>

</form>

</div>

</div>




<div class = "antialiased mx-auto max-w-screen-sm">
<h3  class = "mb-4 text-lg font-semibold text-gray-900"> Comments</h3>
<div class ="space-y-4">
@foreach($comments as $comment)
<div class ="flex">
<div class ="flex-shrink-0 mr-3">
<img class = "mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10" src="https://
images.unsplash.com/photo-1604426633861-11b2faead63c?
ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&
auto=format&fit=crop&w=200&h=200&q=80" alt="">
</div>
<div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4
leading - relaxed">
<strong>{{ $ comment->user->name}}</strong > <span class="text-xs
text-gray-400">3:34 PM</span>
<p class="text-sm">{{ $comment->body}}
</p>

@if(count($comment->replies)>0)
<h4 class="my-5 uppercase tracking-wide text-gray-400 font-bold text-xs">
    Replies</h4>



    @foreach($comment->replies as $reply)
<div class="space-y-4 mb-2">
<div class="flex">
<div class="flex-shrink-0 mr-3">
<img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8" src="https:// images.unsplash.com/photo-1604426633861-11b2faead63c?
ixid=MXwxMjA3fDB8MHXwaG90by1wYWd1fHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1& 
auto=format&fit=crop&w=200&h=200&q=80" alt="">
</div>
<div class="flex-1 bg-gray-100 rounded-1g px-4 py-2 sm: px-6 sm:py-4
leading-relaxed">
<strong>{{ $reply->user->name }}</strong> <span class="text-xs
text-gray-400">3:34 PM</span>
<p class="text-xs sm:text-sm">
{{ $reply->body }}
</p>
</div>
</div>



@if(count($reply->replies) > 0)
<div class="pl-12">
<h4 class="my-5 uppercase tracking-wide text-gray-400 font-bold text-xs
">Replies</h4>
@foreach($reply->replies as $reply)
<div class="space-y-4 mb-2">
<div class="flex">
<div class="flex-shrink-0 mr-3">
<img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8" src="https
://images.unsplash.com/photo-1604426633861-11b2faead63c? ixid=MXWxMjA3FDB8MHXwaG90by1wYwd1fHx8fGVufDB8fHw%3D&
ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80" alt="">
</div>


<div class="Flex-1 bg-gray-100 rounded-1g px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
<strong>{{ $reply->user->name }}</strong> <span class="text-xs
text-gray-400">3:34 PM</span>
<p class="text-xs sm:text-sm">
{{ $reply->body }}
</p>
</div>
</div>
</div>
@endforeach


</div>
@endif

</div>
@endforeach
@endif
</div>
</div>
@endforeach