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
                                <h1 data-animation="bounceIn" data-delay="0.2s">Blog title {{$data->post_id}}</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{URL::to('/edit/'.$data->post_id)}}">Edit post</a></li>
                                            <li class="breadcrumb-item"><a href="{{URL::to('/posts/delete/'.$data->post_id)}}">Delete</a></li>
                                    </ol>
                                </nav>
                                <!-- breadcrumb End -->
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
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{asset('/user/img/blog/single_blog_1.png')}}" alt="">
                        </div>
                            <div class="blog_details">
                                <h2 style="color: #2d2d2d;">
                                    {{$data->title}}
                                </h2>
                                <ul class="blog-info-link mt-3 mb-4">
                                    <li><a href="#"><i class="fa fa-user"></i>{{$user_author->user_name}}</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> {{$comment_count}} Comments</a></li>
                                    <li><i class="fa fa-heart"></i></li>
                                </ul>

                                <div class="quote-wrapper">
                                    <div class="quotes">
                                        <script src="https://cdn.jsdelivr.net/npm/markdown-element/dist/markdown-element.min.js"></script>
                                        <mark-down>
                                            {{$data->content}}
                                        </mark-down>
                                    </div>
                                </div>
                                <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                                    people like this</p>
                                <div>
                                    @foreach($comments as $comment)
                                        <span><img style="width:70px;height: 70px;" src="{{URL::to('/storage/avatar_url/'.$comment->avatar_url)}}"></span>
                                        {{$comment->user_name}}
                                    <p><br>{{$comment->content}}</p>
                                        <hr/>
                                    @endforeach
                                </div>
                            </div>
                    </div>

                    <div class="comment-form">
                        <h4>Your comment</h4>
                        <form method="post" class="form-contact comment_form" action="{{URL::to('/posts/{$data->post_id}/comment')}}" id="commentForm" >
                            {{ csrf_field() }}
                            <input type="hidden" name="post_id" value='{{$data->post_id}}'>
                            <input type="hidden" name="user_id" value="{{$current_user->user_id}}">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="content" id="comment" cols="30" rows="9"
                               placeholder="Write Comment"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="{{ route('search.result') }}">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" name="query" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Search</button>
                            </form>
                        </aside>
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
