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
                            <h1 data-animation="bounceIn" data-delay="0.2s">Create new blog</h1>
                            <!-- breadcrumb Start-->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{URL::to('/posts')}}">All Blog</a></li>
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
<div class="container">
    <div class="row">
        <div class="comment-form">
            <h4>Your blog</h4>
            <form class="form-contact comment_form" action="{{URL::to('/create_post')}}" id="commentForm" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">

                    <div class="col-sm-4">
                        <div class="form-group">
                            <input class="form-control" name="title" id="title" type="text" placeholder="Title">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="col-xs-12 col-sm-4">
                            <input type="file" name="post_url">
                        </div>
                        <div class="vspace-12-sm"></div>
                    </div>

                    <div class="col-12">
                        <p>Tags</p>
                        <div class="form-group">
                            @foreach($tags as $tag)
                            <label class="checkbox-inline"><input type="checkbox" name="tags[]" value="{{$tag->tag_id}}">{{$tag->tag_title}}</label>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" name="description" id="comment" cols="30" rows="5" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" name="detail_content" id="comment" cols="30" rows="9" placeholder="Content"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
