<div>
    @foreach($comments as $comment)
    @if ($comment->comment_proj_id==1)
    @foreach ($users as $user)
    @if ($user->user_id == $comment->comment_user_id)
    <div><h1>{{$user->user_fname}} {{$user->user_lname}}</h1></div>
    @endif
    @endforeach
        <div>
            <span>{{ $comment->comment_text }}</span>
        </div>
        @endif
    @endforeach
</div>
