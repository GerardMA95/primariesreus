<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
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
<body class="bg-white">
@yield('main')

@section('footer')
    <footer class="footer bg-info">
        <div class="container">
            <a class="footer-brand text-white" href="#">Primàries Reus</a>
            <ul class="pull-center">
                <li>
                    <a class="text-white" href="{{ route('contactMain') }}">
                        FAQs
                    </a>
                </li>
                <li>
                    <a class="text-white" href="{{ route('contactMain') }}">
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
                    <a href="https://t.me/PrimariesReus" target="_blank" class="btn btn-just-icon btn-white btn-link"
                       rel="tooltip" title="Telegram" data-original-title="Telegram">
                        <i class="fab fa-telegram-plane"></i>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
@show
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
@show
</body>
</html>