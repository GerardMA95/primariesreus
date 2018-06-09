<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="57x57"
          href="{{ asset('images/web/logo/favicon') }} {{ asset('images/web/logo/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/web/logo/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/web/logo/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/web/logo/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/web/logo/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/web/logo/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/web/logo/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/web/logo/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/web/logo/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"
          href="{{ asset('images/web/logo/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/web/logo/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/web/logo/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/web/logo/favicon/favicon-16x16.png')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('images/web/logo/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">


@section('style')
    <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" type="text/css"
              href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
              integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
              crossorigin="anonymous">
        <!-- Slick Slider http://kenwheeler.github.io/slick/ -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <!-- Material Kit CSS -->
        {{ Html::style('css/web/material-kit.css') }}
    @show
    <script src='https://www.google.com/recaptcha/api.js?hl=ca'></script>
</head>
<body>
@section('navbar')
    <nav class="navbar fixed-top navbar-expand-lg" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand text-info" style="font-size: 25px;" href="{{ route('home') }}"> Primàries Reus</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="button-container nav-item iframe-extern">
                        <a href="{{ route('home') }}" class="nav-link">
                            FAQs
                        </a>
                    </li>
                    <li class="button-container nav-item iframe-extern">
                        <a href="{{ route('adhesionsMain') }}" class="nav-link">
                            Adhesions
                        </a>
                    </li>
                    <li class="button-container nav-item iframe-extern">
                        <a href="{{ route('contactMain') }}" class="nav-link">
                            Preguntes?
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@show
@section('header-main')
    <div class="page-header header-filter header-small" data-parallax="true"
         style="background-image: url({{ asset('images/web/main/reus.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2>Concentrem el vot, guanyem la <span class="text-capitalize"><b>república</b></span>.</h2>
                </div>
            </div>
        </div>
    </div>
@show
<div class="main main-raised">
    @yield('main')

    @section('footer')
        <footer class="footer bg-info mb-3 rounded">
            <div class="container">
                <a class="footer-brand text-white" href="{{ route('home') }}">Primàries Reus</a>
                <ul class="pull-center">
                    <li>
                        <a class="text-white" href="{{ route('home') }}">
                            FAQs
                        </a>
                    </li>
                    <li>
                        <a class="text-white" href="{{ route('adhesionsMain') }}">
                            Adhesions
                        </a>
                    </li>
                    <li>
                        <a class="text-white" href="{{ route('contactMain') }}">
                            Preguntes?
                        </a>
                    </li>
                </ul>
                <ul class="social-buttons float-right">
                    <li>
                        <a href="https://www.facebook.com/PrimariesReus/" target="_blank"
                           class="btn btn-just-icon btn-white btn-link" rel="tooltip" title="Facebook"
                           data-original-title="Facebook">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/PrimariesReus" target="_blank"
                           class="btn btn-just-icon btn-white btn-link" rel="tooltip" title="Twitter"
                           data-original-title="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://t.me/PrimariesReus" target="_blank"
                           class="btn btn-just-icon btn-white btn-link" rel="tooltip" title="Telegram"
                           data-original-title="Telegram">
                            <i class="fab fa-telegram-plane"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    @show
</div>
@section('javascript')
    <!--   Core JS Files   -->
    {{ Html::script('js/web/core/jquery.min.js') }}
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    {{ Html::script('js/web/core/popper.min.js') }}
    {{ Html::script('js/web/bootstrap-material-design.min.js') }}
    <!-- Plugin for Date Time Picker and Full Calendar Plugin-->
    {{ Html::script('js/web/plugins/moment.min.js') }}
    <!-- Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    {{ Html::script('js/web/plugins/bootstrap-selectpicker.js') }}
    <!-- Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
    {{ Html::script('js/web/plugins/bootstrap-tagsinput.js') }}
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    {{ Html::script('js/web/plugins/jasny-bootstrap.min.js') }}
    <!-- Plugin for Small Gallery in Product Page -->
    {{ Html::script('js/web/plugins/jquery.flexisel.js') }}
    <!-- Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    {{ Html::script('js/web/plugins/bootstrap-datetimepicker.min.js') }}
    <!-- Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    {{ Html::script('js/web/plugins/nouislider.min.js') }}
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    {{ Html::script('js/web/material-kit.js?v=2.0.0') }}
    <!-- Slick Slider http://kenwheeler.github.io/slick/ -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@show
</body>
</html>