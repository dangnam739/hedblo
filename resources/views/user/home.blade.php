@extends('layout_user')
@section('content')

    <!--? slider Area Start-->
    <section class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-12">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInLeft" data-delay="0.2s">Knowledge Sharing<br> platform</h1>
                                <p data-animation="fadeInLeft" data-delay="0.4s">Build skills with courses, certificates, and degrees online from world-class universities and companies</p>
                                <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Join for Free</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ? services-area -->

    <div class="services-area">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-30">
                        <div class="features-icon">
                            <img src="{{asset('public/user/img/icon/icon1.svg')}}" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>60+ UX courses</h3>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-30">
                        <div class="features-icon">
                            <img src="{{asset('public/user/img/icon/icon2.svg')}}" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Expert instructors</h3>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-30">
                        <div class="features-icon">
                            <img src="{{asset('public/user/img/icon/icon3.svg')}}" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Life time access</h3>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses area start -->
    <div class="courses-area section-padding40 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <h2>Newest Post</h2>
                    </div>
                </div>
            </div>
            <div class="courses-actives">
                <!-- Single -->
                <div class="properties pb-20">
                    <div class="properties__card">
                        <div class="properties__img overlay1">
                          <img src="{{asset('public/user/img/gallery/featured1.png')}}" alt="">
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
                            <a href="{{URL::to('/blog_detail')}}" class="border-btn border-btn2">Read more</a>
                        </div>

                    </div>
                </div>
                <!-- Single -->
                <!-- Single -->
                <div class="properties pb-20">
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
                            <a href="#" class="border-btn border-btn2">Find out more</a>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <!-- Single -->
                <div class="properties pb-20">
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
                            <a href="#" class="border-btn border-btn2">Find out more</a>
                        </div>
                    </div>
                </div>
                <!-- Single -->
            </div>
        </div>
    </div>
    <!-- Courses area End -->
@endsection
