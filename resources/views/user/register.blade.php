<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> App landing</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/user/img/favicon.ico')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('public/user/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/user/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/user/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('public/user/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('public/user/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('public/user/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('public/user/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/user/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('public/user/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('public/user/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/user/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/user/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('public/user/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('public/user/css/style.css')}}">
</head>
<body>
<!-- ? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{asset('public/user/img/logo/loder.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start-->


<!-- Register -->

<main class="login-body" data-vide-bg="{{asset('public/user/img/login-bg.mp4')}}">
    <!-- Login Admin -->
    <form class="form-default" action="login-bg.mp4" method="POST">

        <div class="login-form">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="index.html"><img src="{{asset('public/user/img/logo/loder.png')}}" alt=""></a>
            </div>
            <h2>Registration Here</h2>

            <div class="form-input">
                <input  type="text" name="name" placeholder="Full name">
            </div>
            <div class="form-input">
                <input type="email" name="email" placeholder="Email Address">
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="Confirm Password">
            </div>
            <div class="form-input pt-30">
                <input type="submit" name="submit" value="Registration">
            </div>
            <!-- Forget Password -->
            <a href="{{URL::to('/login')}}" class="registration">login</a>
        </div>
    </form>
    <!-- /end login form -->
</main>


<script src="{{asset('public/user/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('public/user/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('public/user/js/popper.min.js')}}"></script>
<script src="{{asset('public/user/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('public/user/js/jquery.slicknav.min.js')}}"></script>
<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('public/user/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/user/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('public/user/js/wow.min.js')}}"></script>
<script src="{{asset('public/user/js/animated.headline.js')}}"></script>
<script src="{{asset('public/user/js/jquery.magnific-popup.js')}}"></script>

<!-- Date Picker -->
<script src="{{asset('public/user/js/gijgo.min.js')}}"></script>
<!-- Nice-select, sticky -->
<script src="{{asset('public/user/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('public/user/js/jquery.sticky.js')}}"></script>
<!-- Progress -->
<script src="{{asset('public/user/js/jquery.barfiller.js')}}"></script>
<!-- counter , waypoint,Hover Direction -->
<script src="{{asset('public/user/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('public/user/js/waypoints.min.js')}}"></script>
<script src="{{asset('public/user/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('public/user/js/hover-direction-snake.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('public/user/js/contact.js')}}"></script>
<script src="{{asset('public/user/js/jquery.form.js')}}"></script>
<script src="{{asset('public/user/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('public/user/js/mail-script.js')}}"></script>
<script src="{{asset('public/user/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{asset('public/user/js/plugins.js')}}"></script>
<script src="{{asset('public/user/js/main.js')}}"></script>

<!-- Video bg -->
<script src="{{asset('public/user/js/jquery.vide.js')}}"></script>

</body>
</html>
