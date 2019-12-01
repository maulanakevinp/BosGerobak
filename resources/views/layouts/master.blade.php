
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/template/img/logo.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{url('/')}}/template/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/template/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('/')}}/template/css/magnific-popup.css">
    <link rel="stylesheet" href="{{url('/')}}/template/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/')}}/template/css/themify-icons.css">
    <link rel="stylesheet" href="{{url('/')}}/template/css/nice-select.css">
    <link rel="stylesheet" href="{{url('/')}}/template/css/flaticon.css">
    <link rel="stylesheet" href="{{url('/')}}/template/css/animate.css">
    <link rel="stylesheet" href="{{url('/')}}/template/css/slicknav.css">
    <link rel="stylesheet" href="{{url('/')}}/template/css/style.css">
    <link rel="stylesheet" href="{{url('/')}}/template/css/responsive.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	@yield('styles')
</head>

<body>
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul class="mein_menu_list" id="navigation">
                                        <li><a href="{{url('/')}}/template/about.html">About</a></li>
                                        <li><a href="{{url('/')}}/template/service.html">Services</a></li>
                                        <li><a href="{{url('/')}}/template/menu.html">menu</a></li>
                                        <li><a href="{{url('/')}}/template/gallery.html">gallery</a></li>
                                        <div class="logo-img d-none d-lg-block">
                                                <a href="{{url('/')}}/template/index.html">
                                                    <img src="{{url('/')}}/template/img/logo.png" alt="">
                                                </a>
                                            </div>
                                        <li><a href="{{url('/')}}/template/#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{url('/')}}/template/blog.html">blog</a></li>
                                                <li><a href="{{url('/')}}/template/single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{url('/')}}/template/#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{url('/')}}/template/elements.html">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{url('/')}}/template/contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                            <div class="custom_order">
                                <a href="{{url('/')}}/template/#" class="boxed_btn_white">Custom Order</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                        <div class="logo-img-small d-sm-block d-md-block d-lg-none">
                                <a href="{{url('/')}}/template/index.html">
                                    <img src="{{url('/')}}/template/img/logo.png" alt="">
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area-start -->
    <div class="slider_area zigzag_bg_2">
        <div class="slider_sctive owl-carousel">
            <div class="single_slider slider_img_1">
                <div class="single_slider-iner">
                    <div class="slider_contant text-center">
                        <h3>Food Catering <br>
                            Service.</h3>
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women <br>
                            face higher conduct standards especially in the workplace. That’s why it’s <br>
                                crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class="single_slider slider_img_1">
                <div class="single_slider-iner">
                    <div class="slider_contant text-center">
                        <h3>Food Catering <br>
                            Service.</h3>
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women <br>
                            face higher conduct standards especially in the workplace. That’s why it’s <br>
                                crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class="single_slider slider_img_1">
                <div class="single_slider-iner">
                    <div class="slider_contant text-center">
                        <h3>Food Catering <br>
                            Service.</h3>
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women <br>
                            face higher conduct standards especially in the workplace. That’s why it’s <br>
                                crucial that, as women.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area-end -->

    <!-- service_area-start -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60">
                        <h3>Our Services</h3>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards <br> especially in the workplace. That’s why it’s crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-gift"></i>
                        </div>
                        <h4>Birthday Catering</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-cake"></i>
                        </div>
                        <h4>Wedding Service</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-dance"></i>
                        </div>
                        <h4>Party Catering</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-calendar"></i>
                        </div>
                        <h4>Event Catering</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-businessman"></i>
                        </div>
                        <h4>Corporate Service</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-running-man"></i>
                        </div>
                        <h4>Catering On Demand</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area-end -->

    <!-- video_area_start -->
    <div class="video_area video_bg zigzag_bg_1 zigzag_bg_2 ">
        <div class="video_area_inner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video_text">
                            <div class="info">
                                <div class="info_inner">
                                        <h4>Watch Video</h4>
                                        <p>You will love our execution</p>
                                </div>
                                <div class="icon_video">
                                        <a class="popup-video" href="{{url('/')}}/template/https://www.youtube.com/watch?v=HWnXId_Zg4k"><i class="ti-control-play"></i></a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video_area_end -->

    <!-- order_area_start -->
    <div class="order_area">
        <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title mb-70">
                            <h3>Popular Orders</h3>
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards <br> especially in the workplace. That’s why it’s crucial that, as women.</p>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="{{url('/')}}/template/img/order/order-1.png" alt="">
                            <div class="order_prise">
                                <span>10.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="{{url('/')}}/template/#">Weastern Set Meal 01</a></h3>
                            <p>Chicken Fried Rice   |   Crispy Chicken fry <br>
                                    Weastern Pickle   |   Mixed Vegetable <br>
                                    Soft Drinks
                            </p>
                            <a href="{{url('/')}}/template/#" class="boxed_btn">Order Now!</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="{{url('/')}}/template/img/order/order-2.png" alt="">
                            <div class="order_prise">
                                <span>10.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="{{url('/')}}/template/#">Weastern Set Meal 02</a></h3>
                            <p>Chicken Fried Rice   |   Crispy Chicken fry <br>
                                    Weastern Pickle   |   Mixed Vegetable <br>
                                    Soft Drinks
                            </p>
                            <a href="{{url('/')}}/template/#" class="boxed_btn">Order Now!</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="{{url('/')}}/template/img/order/order-3.png" alt="">
                            <div class="order_prise">
                                <span>10.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="{{url('/')}}/template/#">Weastern Set Meal 03</a></h3>
                            <p>Chicken Fried Rice   |   Crispy Chicken fry <br>
                                    Weastern Pickle   |   Mixed Vegetable <br>
                                    Soft Drinks
                            </p>
                            <a href="{{url('/')}}/template/#" class="boxed_btn">Order Now!</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="{{url('/')}}/template/img/order/order-4.png" alt="">
                            <div class="order_prise">
                                <span>10.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="{{url('/')}}/template/#">Weastern Set Meal 01</a></h3>
                            <p>Chicken Fried Rice   |   Crispy Chicken fry <br>
                                    Weastern Pickle   |   Mixed Vegetable <br>
                                    Soft Drinks
                            </p>
                            <a href="{{url('/')}}/template/#" class="boxed_btn">Order Now!</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="{{url('/')}}/template/img/order/order-5.png" alt="">
                            <div class="order_prise">
                                <span>10.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="{{url('/')}}/template/#">Weastern Set Meal 02</a></h3>
                            <p>Chicken Fried Rice   |   Crispy Chicken fry <br>
                                    Weastern Pickle   |   Mixed Vegetable <br>
                                    Soft Drinks
                            </p>
                            <a href="{{url('/')}}/template/#" class="boxed_btn">Order Now!</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="{{url('/')}}/template/img/order/order-6.png" alt="">
                            <div class="order_prise">
                                <span>10.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="{{url('/')}}/template/#">Weastern Set Meal 03</a></h3>
                            <p>Chicken Fried Rice   |   Crispy Chicken fry <br>
                                    Weastern Pickle   |   Mixed Vegetable <br>
                                    Soft Drinks
                            </p>
                            <a href="{{url('/')}}/template/#" class="boxed_btn">Order Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- order_area_end -->

    <!-- testmonial_area_start -->
    <div class="testmonial_area banner-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title white mb-60">
                        <h3>Feedback from Customers</h3>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards <br> especially in the workplace. That’s why it’s crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="{{url('/')}}/template/img/testmonial/1.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="{{url('/')}}/template/img/testmonial/2.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adam Nahan</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="{{url('/')}}/template/img/testmonial/1.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="{{url('/')}}/template/img/testmonial/2.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adam Nahan</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="{{url('/')}}/template/img/testmonial/1.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adame Nesane</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                        <div class="single_testmonial d-flex">
                            <div class="testmonial_thumb">
                                <img src="{{url('/')}}/template/img/testmonial/2.png" alt="">
                            </div>
                            <div class="testmonial_author">
                                <h3>Adam Nahan</h3>
                                <span>Chief Customer</span>
                                <p>You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one
                                    yielding creepeth third give may never lie alternet food.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testmonial_area_end -->

    <!-- brand_area-start -->
    <div class="brand_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-70">
                        <h3>Brands love to take Our Services</h3>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                            standards <br> especially in the workplace. That’s why it’s crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="{{url('/')}}/template/img/brand/1.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="{{url('/')}}/template/img/brand/02.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="{{url('/')}}/template/img/brand/03.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="{{url('/')}}/template/img/brand/04.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="{{url('/')}}/template/img/brand/05.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="{{url('/')}}/template/img/brand/06.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="{{url('/')}}/template/img/brand/7.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="{{url('/')}}/template/img/brand/12.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="{{url('/')}}/template/img/brand/9.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="{{url('/')}}/template/img/brand/10.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="{{url('/')}}/template/img/brand/11.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="{{url('/')}}/template/img/brand/8.png" alt="">
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- brand_area-end -->

    <!-- footer-start -->
    <footer class="footer_area footer-bg zigzag_bg_1">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Top Products
                            </h3>
                            <ul>
                                <li><a href="{{url('/')}}/template/#">Managed Website</a></li>
                                <li><a href="{{url('/')}}/template/#"> Manage Reputation</a></li>
                                <li><a href="{{url('/')}}/template/#">Power Tools</a></li>
                                <li><a href="{{url('/')}}/template/#">Marketing Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Quick Links
                            </h3>
                            <ul>
                                <li><a href="{{url('/')}}/template/#">Jobs</a></li>
                                <li><a href="{{url('/')}}/template/#">Brand Assets</a></li>
                                <li><a href="{{url('/')}}/template/#"> Investor Relations</a></li>
                                <li><a href="{{url('/')}}/template/#">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Features
                            </h3>
                            <ul>
                                <li><a href="{{url('/')}}/template/#">Jobs</a></li>
                                <li><a href="{{url('/')}}/template/#">Brand Assets</a></li>
                                <li><a href="{{url('/')}}/template/#">Investor Relations</a></li>
                                <li><a href="{{url('/')}}/template/#">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Resources
                            </h3>
                            <ul>
                                <li><a href="{{url('/')}}/template/#">Guides</a></li>
                                <li><a href="{{url('/')}}/template/#">Research</a></li>
                                <li><a href="{{url('/')}}/template/#">Experts</a></li>
                                <li><a href="{{url('/')}}/template/#">Agencies</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Newsletter
                            </h3>
                            <p class="offer_text" >You can trust us. we only send promo offers,</p>
                            <form action="#">
                                <input type="text" placeholder="Your email address">
                                <button type="submit"> <i class="ti-arrow-right"></i> </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-md-12 col-lg-8">
                        <div class="copyright">
                                <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="{{url('/')}}/template/https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-12 col-lg-4">
                        <div class="social_links">
                            <ul>
                                <li><a href="{{url('/')}}/template/#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="{{url('/')}}/template/#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="{{url('/')}}/template/#"> <i class="fa fa-dribbble"></i> </a></li>
                                <li><a href="{{url('/')}}/template/#"> <i class="fa fa-behance"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->


    <!-- JS here -->
    <script src="{{url('/')}}/template/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{url('/')}}/template/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{url('/')}}/template/js/popper.min.js"></script>
    <script src="{{url('/')}}/template/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/template/js/owl.carousel.min.js"></script>
    <script src="{{url('/')}}/template/js/isotope.pkgd.min.js"></script>
    <script src="{{url('/')}}/template/js/ajax-form.js"></script>
    <script src="{{url('/')}}/template/js/waypoints.min.js"></script>
    <script src="{{url('/')}}/template/js/jquery.counterup.min.js"></script>
    <script src="{{url('/')}}/template/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{url('/')}}/template/js/scrollIt.js"></script>
    <script src="{{url('/')}}/template/js/jquery.scrollUp.min.js"></script>
    <script src="{{url('/')}}/template/js/wow.min.js"></script>
    <script src="{{url('/')}}/template/js/nice-select.min.js"></script>
    <script src="{{url('/')}}/template/js/jquery.slicknav.min.js"></script>
    <script src="{{url('/')}}/template/js/jquery.magnific-popup.min.js"></script>
    <script src="{{url('/')}}/template/js/plugins.js"></script>

    <!--contact js-->
    <script src="{{url('/')}}/template/js/contact.js"></script>
    <script src="{{url('/')}}/template/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{url('/')}}/template/js/jquery.form.js"></script>
    <script src="{{url('/')}}/template/js/jquery.validate.min.js"></script>
    <script src="{{url('/')}}/template/js/mail-script.js"></script>

    <script src="{{url('/')}}/template/js/main.js"></script>
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    @include('sweet::alert')
	@stack('scripts')
</body>

</html>