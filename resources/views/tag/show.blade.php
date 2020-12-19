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
                                <h1 data-animation="bounceIn" data-delay="0.2s">All {{ $tag->tag_title }} Tags</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a
                                                href="{{ URL::to('/tags/' . $tag->tag_id . '/edit') }}">Edit Tag title</a>
                                        </li>
                                        <li class="breadcrumb-item"><a
                                                href="{{ URL::to('/tags/delete/' . $tag->tag_id) }}">Delete this tag</a>
                                        </li>
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

    @if (!isset($posts))
        <h3>Empty Tag</h3>
    @else
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                @foreach ($posts as $post)
                    <div class="col-lg-4">
                        <div class="properties properties2 mb-30">
                            <div class="properties__card">
                                <div class="properties__caption">
                                    <h3>{{ $post->title }}</h3>
                                    <p>{{ $post->description }}</p>
                                    <a href="{{ URL::to('/posts/' . $post->post_id) }}" class="border-btn border-btn2">Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Courses area End -->
    @endif
@endsection
