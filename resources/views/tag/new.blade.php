@extends('layout_admin')
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
                                <h1 data-animation="bounceIn" data-delay="0.2s">Create new tag</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{URL::to('/')}}">All Blog</a></li>
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
                <form class="form-contact comment_form" action="create" id="commentForm" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control" name="title" id="title" type="text" placeholder="Title">
                            </div>
                        </div>
                    <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn" name="Add Tag"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
