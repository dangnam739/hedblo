<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>User Profile Page - Ace Admin</title>

    <meta name="description" content="3 styles with inline editable feature" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('/profile/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/profile/font-awesome/4.5.0/css/font-awesome.min.css') }}" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{ asset('/profile/css/jquery-ui.custom.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/profile/css/jquery.gritter.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/profile/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/profile/css/bootstrap-datepicker3.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/profile/css/bootstrap-editable.min.css') }}" />

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('/profile/css/fonts.googleapis.com.css') }}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('/profile/css/ace.min.css') }}" class="ace-main-stylesheet"
        id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{ asset('/profile/css/ace-part2.min.css') }}" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('/profile/css/ace-skins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/profile/css/ace-rtl.min.css') }}" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{ asset('/profile/css/ace-ie.min.css') }}" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="{{ asset('/profile/js/ace-extra.min.js') }}"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="{{ asset('/profile/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('/profile/js/respond.min.js') }}"></script>
    <![endif]-->

    <!--Css for header-->
    <link rel="stylesheet" href="{{ asset('/user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/style.css') }}">
</head>

<body class="no-skin">
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{ URL::to('/') }}"><img src="{{ asset('/user/img/logo/logo.png') }}"
                                            alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li class="active"><a href="{{ URL::to('/') }}">Home</a></li>
                                                <li><a href="{{ URL::to('/all_blog') }}">Blogs</a></li>
                                                <li><a href="{{ URL::to('create_blog') }}">Create</a></li>
                                                <li><a href="#">Categories</a>
                                                    <ul class="submenu">
                                                        <li><a href="#">Coding</a></li>
                                                        <li><a href="#">Food</a></li>
                                                        <li><a href="#">Travel</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">User account</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ URL::to('/profiles') }}">Profile</a></li>
                                                        <li><a href="{{ URL::to('/change-pass') }}">Change pass</a></li>
                                                    </ul>
                                                </li>

                                                <!-- Button -->
                                                <li class="button-header margin-left "><a
                                                        href="{{ URL::to('/register') }}" class="btn">Sign Up</a></li>
                                                <li class="button-header"><a href="{{ URL::to('/login') }}"
                                                        class="btn btn3">Log in</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <main>
        <section class="slider-area slider-area2">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Your profile</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">Home</a></li>
                                            <li class="breadcrumb-item"><a href="{{ URL::to('/all_blog') }}">All
                                                    Blog</a></li>
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
        <div class="main-container ace-save-state" id="main-container">
            <div class="main-content">
                <div class="main-content-inner">

                    <div class="page-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->

                                <div class="hr dotted"></div>

                                <div>
                                    <div id="user-profile-3" class="user-profile row">
                                        <div class="col-sm-offset-1 col-sm-10">
                                            <div class="space"></div>
                                            <form class="form-horizontal" action="update" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="tabbable">
                                                    <div class="tab-content profile-edit-tab-content">
                                                        <div id="edit-basic" class="tab-pane in active">
                                                            <h4 class="header blue bolder smaller">General</h4>

                                                            <div class="row">
                                                                <img src="">
                                                                <div class="col-xs-12 col-sm-4">
                                                                    <input type="file" name="avatar_url"/>
                                                                </div>

                                                                <div class="vspace-12-sm"></div>

                                                                <div class="col-xs-12 col-sm-8">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="col-sm-4 control-label no-padding-right"
                                                                            for="form-field-username">Username</label>

                                                                        <div class="col-sm-8">
                                                                            <input class="col-xs-12 col-sm-10"
                                                                                type="text" id="form-field-username"
                                                                                placeholder="Username" name="username"
                                                                                value={{ $user->user_name }} />
                                                                        </div>
                                                                    </div>

                                                                    <div class="space-4"></div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            class="col-sm-4 control-label no-padding-right"
                                                                            for="form-field-first">Name</label>

                                                                        <div class="col-sm-8">
                                                                            <input class="input-small" type="text"
                                                                                id="form-field-first"
                                                                                placeholder="First Name"
                                                                                name="firstname"
                                                                                value={{ $user->first_name }} />
                                                                            <input class="input-small" type="text"
                                                                                id="form-field-last"
                                                                                placeholder="Last Name" name="lastname"
                                                                                value={{ $user->last_name }} />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <hr />
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label no-padding-right"
                                                                    for="form-field-date">Birth Date</label>

                                                                <div class="col-sm-9">
                                                                    <span class="input-icon input-icon-right">
                                                                        <input class="input-medium date-picker pr-1"
                                                                            id="form-field-date" type="date"
                                                                            data-date-format="dd-mm-yyyy"
                                                                            name="birthday"
                                                                            value={{ $user->birthday }} />
                                                                        <i class="ace-icon fa fa-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="space-4"></div>

                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label no-padding-right">Gender</label>
                                                                <div class="col-sm-9">
                                                                    <input type="radio" name="form-field-radio" value="Male" <?php if($user->gender=="Male"){?> checked="true" <?php } ?> />Male
                                                                    <input type="radio" name="form-field-radio" value="Female"<?php if($user->gender=="Female"){?> checked="true" <?php } ?>/>Female
                                                                </div>
                                                                </label>                  
                                                               
                                                            </div>

                                                            <div class="space-4"></div>

                                                            {{-- <div class="form-group">
                                                                    <label
                                                                        class="col-sm-3 control-label no-padding-right"
                                                                        for="form-field-comment">Comment</label>

                                                                    <div class="col-sm-9">
                                                                        <textarea id="form-field-comment"></textarea>
                                                                    </div>
                                                                </div> --}}

                                                                <div class="space"></div>
                                                                <h4 class="header blue bolder smaller">Contact</h4>

                                                                <div class="form-group">
                                                                    <label
                                                                        class="col-sm-3 control-label no-padding-right"
                                                                        for="form-field-email">Email</label>

                                                                    <div class="col-sm-9">
                                                                        <span class="input-icon input-icon-right">
                                                                            <input type="email" id="form-field-email"
                                                                                name="email"
                                                                                placeholder="example@gmail.com"
                                                                                value={{ $user->email }} />
                                                                            <i class="ace-icon fa fa-envelope"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                                <div class="space-4"></div>

                                                                <div class="form-group">
                                                                    <label
                                                                        class="col-sm-3 control-label no-padding-right"
                                                                        for="form-field-website">Address</label>

                                                                    <div class="col-sm-9">
                                                                        <span class="input-icon input-icon-right">
                                                                            <input type="text" id="form-field-website"
                                                                                name="address" placeholder="Address"
                                                                                value={{ $user->address }} />
                                                                            <i class="ace-icon fa fa-globe"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                                <div class="space-4"></div>

                                                                <div class="form-group">
                                                                    <label
                                                                        class="col-sm-3 control-label no-padding-right"
                                                                        for="form-field-phone">Phone</label>

                                                                    <div class="col-sm-9">
                                                                        <span class="input-icon input-icon-right">
                                                                            <input class="input-medium input-mask-phone"
                                                                                type="text" id="form-field-phone"
                                                                                name="phone" placeholder="phone"
                                                                                value={{ $user->phone }} />
                                                                            <i
                                                                                class="ace-icon fa fa-phone fa-flip-horizontal"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                                <div class="space"></div>

                                                                <div id="edit-password" class="tab-pane">
                                                                    <div class="space-10"></div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            class="col-sm-3 control-label no-padding-right"
                                                                            for="form-field-pass1">New Password</label>
                                                                        <div class="col-sm-9">
                                                                            <input type="password"
                                                                                id="form-field-pass1" />
                                                                        </div>
                                                                    </div>

                                                                    <div class="space-4"></div>

                                                                    <div class="form-group">
                                                                        <label
                                                                            class="col-sm-3 control-label no-padding-right"
                                                                            for="form-field-pass2">Confirm
                                                                            Password</label>

                                                                        <div class="col-sm-9">
                                                                            <input type="password"
                                                                                id="form-field-pass2" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="clearfix form-actions">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button class="btn btn-info" type="submit">
                                                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                                                    Save
                                                                </button>
                                                                &nbsp; &nbsp;
                                                                <button class="btn" type="reset">
                                                                    <i class="ace-icon fa fa-undo bigger-110"></i>
                                                                    Reset
                                                                </button>

                                                            </div>
                                                        </div>
                                            </form>
                                        </div><!-- /.span -->
                                    </div><!-- /.user-profile -->
                                </div>

                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->
        </div><!-- /.main-container -->
    </main>

    <footer>
        <div class="footer-wrappper footer-bg">
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo mb-25">
                                        <a href="{{ URL::to('/') }}"><img
                                                src="{{ asset('/user/img/logo/logo2_footer.png') }}" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>The automated process starts as soon as your clothes go into the machine.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- social -->
                                    <div class="footer-social">
                                        <a href="https://twitter.com/Locckhl1999" target="_blank"><i
                                                class="fab fa-twitter"></i></a>
                                        <a href="https://www.facebook.com/Locckhl/" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.pinterest.com/locckhl/" target="_blank"><i
                                                class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Our solutions</h4>
                                    <ul>
                                        <li><a href="#">Design & creatives</a></li>
                                        <li><a href="#">Telecommunication</a></li>
                                        <li><a href="#">Restaurant</a></li>
                                        <li><a href="#">Programing</a></li>
                                        <li><a href="#">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Support</h4>
                                    <ul>
                                        <li><a href="#">Design & creatives</a></li>
                                        <li><a href="#">Telecommunication</a></li>
                                        <li><a href="#">Restaurant</a></li>
                                        <li><a href="#">Programing</a></li>
                                        <li><a href="#">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Company</h4>
                                    <ul>
                                        <li><a href="#">Design & creatives</a></li>
                                        <li><a href="#">Telecommunication</a></li>
                                        <li><a href="#">Restaurant</a></li>
                                        <li><a href="#">Programing</a></li>
                                        <li><a href="#">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>
                                            document.write(new Date().getFullYear());

                                        </script> All rights reserved | This template is made with <i
                                            class="fa fa-heart" aria-hidden="true"></i> by <a
                                            href="https://colorlib.com" target="_blank">Colorlib</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </div>
    </footer>

    <!--[if lte IE 8]>
<script src="{{ asset('/profile/js/excanvas.min.js') }}"></script>
<![endif]-->
    <script src="{{ asset('/profile/js/jquery-ui.custom.min.js') }}"></script>
    <script src="{{ asset('/profile/js/jquery.ui.touch-punch.min.js') }}"></script>
    <script src="{{ asset('/profile/js/jquery.gritter.min.js') }}"></script>
    <script src="{{ asset('/profile/js/bootbox.js') }}"></script>
    <script src="{{ asset('/profile/js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('/profile/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/profile/js/jquery.hotkeys.index.min.js') }}"></script>
    <script src="{{ asset('/profile/js/bootstrap-wysiwyg.min.js') }}"></script>
    <script src="{{ asset('/profile/js/select2.min.js') }}"></script>
    <script src="{{ asset('/profile/js/spinbox.min.js') }}"></script>
    <script src="{{ asset('/profile/js/bootstrap-editable.min.js') }}"></script>
    <script src="{{ asset('/profile/js/ace-editable.min.js') }}"></script>
    <script src="{{ asset('/profile/js/jquery.maskedinput.min.js') }}"></script>

    <!-- ace scripts -->
    <script src="{{ asset('/profile/js/ace-elements.min.js') }}"></script>
    <script src="{{ asset('/profile/js/ace.min.js') }}"></script>

    <!--Js user template-->
    <script src="{{ asset('/user/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('/user/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('/user/js/popper.min.js') }}"></script>
    <script src="{{ asset('/user/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('/user/js/jquery.slicknav.min.js') }}"></script>
    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('/user/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/user/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('/user/js/wow.min.js') }}"></script>
    <script src="{{ asset('/user/js/animated.headline.js') }}"></script>
    <script src="{{ asset('/user/js/jquery.magnific-popup.js') }}"></script>

    <!-- Date Picker -->
    <script src="{{ asset('/user/js/gijgo.min.js') }}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ asset('/user/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('/user/js/jquery.sticky.js') }}"></script>
    <!-- Progress -->
    <script src="{{ asset('/user/js/jquery.barfiller.js') }}"></script>
    <!-- counter , waypoint,Hover Direction -->
    <script src="{{ asset('/user/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('/user/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('/user/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('/user/js/hover-direction-snake.min.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('/user/js/contact.js') }}"></script>
    <script src="{{ asset('/user/js/jquery.form.js') }}"></script>
    <script src="{{ asset('/user/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/user/js/mail-script.js') }}"></script>
    <script src="{{ asset('/user/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('/user/js/plugins.js') }}"></script>
    <script src="{{ asset('/user/js/main.js') }}"></script>

    <!-- inline scripts related to this page -->
</body>

</html>
