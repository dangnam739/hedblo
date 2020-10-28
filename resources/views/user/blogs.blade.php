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
                                <h1 data-animation="bounceIn" data-delay="0.2s">All Blogs</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">All Blog</a></li>
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

    <!-- Courses area start -->
    <div class="courses-area section-padding40 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <h2>Blogs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="properties properties2 mb-30">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="{{asset('public/user/img/gallery/featured1.png')}}" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>User Experience</p>
                                <h3><a href="#">Fundamental of UX for Application design</a></h3>
                                <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.
                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="restaurant-name">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                        </div>
                                        <p><span>(4.5)</span> based on 120</p>
                                    </div>
                                    <div class="price">
                                        <span>$135</span>
                                    </div>
                                </div>
                                <a href="#" class="border-btn border-btn2">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="properties properties2 mb-30">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="{{asset('public/user/img/gallery/featured2.png')}}" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>User Experience</p>
                                <h3><a href="#">Fundamental of UX for Application design</a></h3>
                                <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.

                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="restaurant-name">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                        </div>
                                        <p><span>(4.5)</span> based on 120</p>
                                    </div>
                                    <div class="price">
                                        <span>$135</span>
                                    </div>
                                </div>
                                <a href="#" class="border-btn border-btn2">Read more</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="properties properties2 mb-30">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="{{asset('public/user/img/gallery/featured3.png')}}" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>User Experience</p>
                                <h3><a href="#">Fundamental of UX for Application design</a></h3>
                                <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.

                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="restaurant-name">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                        </div>
                                        <p><span>(4.5)</span> based on 120</p>
                                    </div>
                                    <div class="price">
                                        <span>$135</span>
                                    </div>
                                </div>
                                <a href="#" class="border-btn border-btn2">Read more</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mt-40">
                        <a href="#" class="border-btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses area End -->

    <!--? top subjects Area Start -->
    <div class="topic-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <h2>Search blog by category</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="{{asset('public/user/img/gallery/topic1.png')}}" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="#">Python</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="{{asset('public/user/img/gallery/topic2.png')}}" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="#">Java</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="{{asset('public/user/img/gallery/topic3.png')}}" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="#">JavaScript</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="{{asset('public/user/img/gallery/topic4.png')}}" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a href="#">C/C++</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mt-20">
                        <a href="courses.html" class="border-btn">View More Subjects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top subjects End -->
@endsection
