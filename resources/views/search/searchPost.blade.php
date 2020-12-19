
@extends('layout_user')
@section('content')

<section class="slider-area slider-area2">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="bounceIn" data-delay="0.2s">Search post by title and content!!</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ URL::to('/home-page') }}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ URL::to('/posts') }}"">All Post</a></li>
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
    <section >
        <div>
            @if(isset($searchResults))
                @if ($searchResults-> isEmpty())
                <div class="courses-area section-padding40 fix">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-8">
                                <div class="section-tittle text-center mb-55">
                                    <h2>Sorry, no results found for the term <b>"{{ $searchterm }}"</b>.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                    @foreach($searchResults->groupByType() as $type => $modelSearchResults)
                    {{-- <h2>Type:{{ $type }}</h2> --}}

                            <div class="courses-area section-padding40 fix">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-7 col-lg-8">
                                            <div class="section-tittle text-center mb-55">
                                                <h2>There are {{ $searchResults->count() }} results for the term <b>"{{ $searchterm }}"</b></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="courses-actives">
                                        @foreach($modelSearchResults as $searchResult)
                                        <!-- Biến $url được cấu hình trong file model-->
                                        <div class="properties pb-20">
                                                    <div class="properties__card">
                                                        <div class="properties__img overlay1">
                                                            <img src="{{asset('/user/img/gallery/featured1.png')}}" alt="">
                                                        </div>
                                                        <div class="properties__caption">
                                                            <h3>{{$searchResult->title}}</h3>
                                                            <a href="{{ $searchResult->url}}" class="border-btn border-btn2">Read more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                    @endforeach
                @endif
            @endif
        </div>
    </section>
@endsection
