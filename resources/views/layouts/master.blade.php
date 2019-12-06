
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/img/logo/logo.png">
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
    
    <link rel="stylesheet" href="{{url('/')}}/css/mystyle.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	@yield('styles')
</head>

<body>
    
    <div class="icons" style="position: fixed; bottom: 30px; right: 0; z-index: 1030">
        <a href="https://api.whatsapp.com/send?phone={{ whatsapp(\App\Contact::find(1)->nomor_whatsapp) }}&text=Halo%20saya%20ingin%20beli%20gerobak%20anda" target="_blank" style="width: 70px;height: 70px;"><img src="{{ asset('img/logo/whatsapp.png') }}" style="width: 70px;height: 70px;padding: 15px;"></a>
    </div>

    <!-- header-start -->
    @include('layouts.components.header')
    <!-- header-end -->

    @yield('content')

    <!-- footer-start -->
    @include('layouts.components.footer')
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
    <script src="{{url('/')}}/js/myscript.js"></script>
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    @include('sweet::alert')
	@stack('scripts')
</body>

</html>