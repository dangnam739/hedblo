<div class="comments-area" id="comments-area">
  <h4>{{$comment_count}} Comments</h4>
  @foreach($comments as $comment)
  <div class="comment-list">
     <div class="single-comment justify-content-between d-flex">
        <div class="user justify-content-between d-flex">
           <div class="thumb">
            @if($comment->avatar_url == null)
                <img src="{{asset('/user/img/blog/comment_1.png')}}" alt="" style="height: 80px; width: 80px">
            @else
              <img src="{{URL::to('/storage/avatar_url/'.$comment->avatar_url)}}" alt="author avatar" style="height: 80px; width:80px">
            @endif
           </div>
           <div class="desc">
              <p class="comment">
                  {{$comment->content}}
              </p>
              <div class="d-flex justify-content-between">
                 <div class="d-flex align-items-center">
                    <h5>
                       <a href="{{ URL::to('users/' . $post->user->user_id) }}">{{$comment->user_name}}</a>
                    </h5>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
    @endforeach
  {!! $comments->links() !!}
</div>