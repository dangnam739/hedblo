@extends('layout_user')
@section('content')




<!--? slider Area Start-->
<section class="slider-area slider-area2">
    <div class="slider-active">
        <!-- Single Slider -->
        <div class="single-slider slider-height2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-11 col-md-12">
                        <div class="hero__caption hero__caption2">
                            <h1 data-animation="bounceIn" data-delay="0.2s">{{$post->title}}</h1>
                            @if($current_user->user_id == $post->user->user_id)
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{URL::to('/edit/'.$post->post_id)}}">Edit post</a></li>
                                        <li class="breadcrumb-item"><a href="{{URL::to('/posts/delete/'.$post->post_id)}}">Delete</a></li>
                                    </ol>
                                </nav>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--? Blog Area Start -->
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 posts-list">
                <div class="single-post">


                    <div class="feature-img">
                        @if($post->post_url == null)
                            <img class="img-fluid" src="{{asset('/user/img/pj3.1.png')}}" alt="" >
                        @else
                            <img class="img-fluid" src="{{asset('/storage/post_url/'.$post->post_url)}}" alt="">
                        @endif
                    </div>
                    <div class="blog_details">
                        <h2 style="color: #2d2d2d;">
                            {{$post->title}}
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="fa fa-user"></i>{{$post->user->user_name}}</a></li>
                            <li><a href="#"><i class="fa fa-comments"></i> {{$comment_count}} Comments</a></li>

                            </li>
                            <div id="react-btn">
                                @if($search_user_post->like_state == 0)
                                    <a href="{{URL::to('/posts/'.$post->post_id.'/react/')}}"><span class='fa-thumb-styling fa fa-thumbs-up react-ajax '  post-id="{{ $post->post_id}}"></span></a>
                                @else
                                    <a href="{{URL::to('/posts/'.$post->post_id.'/react/')}}" ><span class='fa-thumb-styling fa fa-thumbs-up react-ajax reacted'  post-id="{{ $post->post_id}}"></span></a>
                                @endif
                                {{-- <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a> --}}
                            </div>
                        </ul>
                        <script>
                            $(document).ready(function(){
                                $(document).on('click', '.react-ajax', function(event){
                                    event.preventDefault();
                                    var post_id = $(this).attr('post-id');
                                    console.log("post id is "+post_id);
                                    fetch_data(post_id);
                                });
                                function fetch_data(post_id)
                                {
                                    $(".react-ajax").toggleClass("reacted");
                                    $.ajax({
                                        url: post_id+"/react",
                                        success:function(data)
                                        {
                                            console.log(data);
                                            $('.count-like').html(data + " people like this");
                                        }
                                    });
                                }
                            });
                        </script>
                        <div class="quote-wrapper">
                            <div class="quotes">
                                <script src="https://cdn.jsdelivr.net/npm/markdown-element/dist/markdown-element.min.js"></script>
                                <mark-down>
                                    {{$post->content}}
                                </mark-down>
                            </div>
                        </div>
                        <div>
                            @foreach($comments as $comment)
                            <span><img style="width:70px;height: 70px;" src="{{URL::to('/storage/avatar_url/'.$comment->avatar_url)}}"></span>
                            {{$comment->user_name}}
                            <p><br>{{$comment->content}}</p>
                            @endforeach
                            <p>{{$comments->links()}}</p>
                        </div>
                    </div>
                    <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">
                            <p class="like-info">
                                <span class="align-middle"><i class="fa fa-heart"></i></span>
                                <span class="count-like"> {{$count_like}} people like this
                                </span>

                            </p>
                           <div class="col-sm-4 text-center my-2 my-sm-0">
                              <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                           </div>
                           <ul class="social-icons">
                              <li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                              <li><a href="#"><i class="fab fa-behance"></i></a></li>
                           </ul>
                        </div>
                        {{-- <div class="navigation-area">
                           <div class="row">
                              <div
                              class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                              <div class="thumb">
                                 <a href="#">
                                    <img class="img-fluid" src="assets/img/post/preview.png" alt="">
                                 </a>
                              </div>
                              <div class="arrow">
                                 <a href="#">
                                    <span class="lnr text-white ti-arrow-left"></span>
                                 </a>
                              </div>
                              <div class="detials">
                                 <p>Prev Post</p>
                                 <a href="#">
                                    <h4 style="color: #2d2d2d;">Space The Final Frontier</h4>
                                 </a>
                              </div>
                           </div>
                           <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Next Post</p>
                              <a href="#">
                                 <h4 style="color: #2d2d2d;">Telescopes 101</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="assets/img/post/next.png" alt="">
                              </a>
                           </div>
                        </div> --}}
                     </div>
                </div>

                <div class="comment-form">
                    <h4>Your comment</h4>
                    <form method="post" class="form-contact comment_form" action="{{URL::to('/posts/{$post->post_id}/comment')}}" id="commentForm">
                        {{ csrf_field() }}
                        <input type="hidden" name="post_id" value='{{$post->post_id}}'>
                        <input type="hidden" name="user_id" value="{{$current_user->user_id}}">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="content" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post Comment</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="blog_right_sidebar">
                    <!-- <aside class="single_sidebar_widget search_widget">
                        <form action="{{ route('search.result') }}">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" name="query" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                    <div class="input-group-append">
                                        <button class="btns" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
                        </form>
                    </aside> -->
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
                        @foreach($recent_posts as $post)
                        <div class="media post_item">
                            <div class="media-body">
                                <a href="{{URL::to('/posts/'.$post->post_id)}}">
                                    <h3 style="color: #2d2d2d;">{{$post->title}}</h3>
                                </a>
                                <p>{{$post->date_create}}</p>
                            </div>
                        </div>
                        @endforeach

                    </aside>
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
                        <ul class="list cat-list">
                            @foreach ($tags as $tag )
                            <li>
                                <a href="{{URL::to('/posts/tag/'.$tag->tag_id)}}" class="d-flex">
                                    <p>{{$tag->tag_title}}</p>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </aside>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area End -->

@endsection
