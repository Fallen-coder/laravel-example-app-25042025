<h1>Comments</h1>
<ul>
@foreach($comments as $comment)
<li>{{$comment->content}}</li>
@endforeach
</ul>
