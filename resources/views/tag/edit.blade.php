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
                                <h1 data-animation="bounceIn" data-delay="0.2s">Edit tag</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Home Page</a></li>
                                        <li class="breadcrumb-item"><a href="{{ URL::to('/admin/home-page') }}">Control
                                                Page</a></li>
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
        <h4>Edit Tag</h4>
        <form class="form-contact comment_form" action="edit" id="commentForm" method="post">
            @csrf
            <div class="form-group">
                <label>Edit tag title:</label>
                <input class="form-control" name="title" id="title" type="text" placeholder="title" value={{ $tag->tag_title }}>
            </div>
            <div class="form-group">
                <button type="submit" class="button" name="Edit Tag">Edit Tag</button>
            </div>
        </form>
    </div>
@endsection
