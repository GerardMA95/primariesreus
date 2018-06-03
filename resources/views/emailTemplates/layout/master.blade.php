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
        <link rel="stylesheet" type="text/css"
              href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
        <!-- Material Kit CSS -->
        {{ Html::style('css/web/material-kit.min.css') }}
    @show
</head>
<body class="bg-white">
@yield('main')

@section('footer')
    <footer class="footer bg-info">
        <div class="container">
            <a class="footer-brand text-white" href="{{ route('home') }}">Primàries Reus</a>
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
        </div>
    </footer>
@show
</body>
</html>