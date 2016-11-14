<!DOCTYPE html>
<html lang="en">
<head>

    {{--// parallax background with images--}}
    {{--http://preview.oklerthemes.com/porto/4.8.0/index.html--}}

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="author" href="https://plus.google.com/[YOUR PERSONAL G+ PROFILE HERE]"/>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="robots" content="index, follow">

    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    @stack('meta-tags')

    {{--<meta property="og:title" content="awesome blog"/>--}}
    {{--<meta property="og:type" content="article"/>--}}
    {{--<meta property="og:image" content="http://www.google.com/some-thumbnail.jpg"/>--}}
    {{--<meta property="og:url" content="http://blog.google.com"/>--}}
    {{--<meta property="og:description" content=""/>--}}

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    @stack('css')

    <style>
        body {
            font-family: "Open Sans", Arial, sans-serif;
            margin-top: 50px !important;
            /* Margin bottom by footer height */
            margin-bottom: 350px;
        }

        .fa-btn {
            margin-right: 6px;
        }

        html {
            position: relative;
            min-height: 100%;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 300px;
        }
        .page-header{
            background-color: #0E0E0E;
            height: 100px;
        }
        .breadcrumb{
            margin-top: 20px;
            background-color: transparent;
        }
        .page-header h1{
            margin-top: -40px;
            color: #ffffff;
            font-weight: 200;
            border-bottom: 4px solid #267AB7;
            font-size: 2.6em;
            display:inline-block;
        }
        .upper-footer{
            background-color: #0E0E0E;
            height: 250px;;
        }
        .bottom-footer{
            background-color: #060606;
            height: 60px;
            padding: 0px;
        }
        .bottom-stash ul{
            margin-top: 15px;
        }
        .bottom-stash li{
            display: inline-block;
            border-right: 1px solid white;
            padding-right: 15px;
            padding-left: 10px;
        }
        .bottom-stash li:last-child {  border-right:none; }
        .bottom-stash li:first-child {  padding-left: 0px; }

        h2 {
            color: #0E0E0E !important;
            font-size: 2.2em;
            font-weight: 300;
            line-height: 42px;
            margin: 0 0 32px 0;
        }
        p {
            color: #777;
        }
        .fa{
            color: #267AB7;
            /*margin-top: 15px;*/
        }
        .page-header{
            border-top: 3px solid #777777 ;
        }

        /*big menu*/
        .dropdown-menu-lg {
            width: 750px;
            padding: 10px 0px;
            background-color: #F4F4F4;
            border-bottom: 3px solid #267AB7;

        }
        .dropdown-menu-lg > li > ul {
            padding: 0;
            margin: 0;
        }
        .dropdown-header {
            color: #267AB7;
            border-bottom: 1px solid #267AB7;
            margin-bottom: 10px;
        }
        .dropdown-menu-lg > li > ul > li {
            list-style: none;
        }
        .dropdown-menu-lg > li > ul > li > a {
            display: block;
            padding: 3px 20px;
            clear: both;
            font-weight: normal;
            line-height: 1.428571429;
            color: #333333;
            white-space: normal;
        }
        .dropdown-menu-lg > li ul > li > a:hover,
        .dropdown-menu-lg > li ul > li > a:focus {
            text-decoration: none;
            color: #262626;
            background-color: #f5f5f5;
        }
        .dropdown-menu-lg .disabled > a,
        .dropdown-menu-lg .disabled > a:hover,
        .dropdown-menu-lg .disabled > a:focus {
            color: #999999;
        }
        .dropdown-menu-lg .disabled > a:hover,
        .dropdown-menu-lg .disabled > a:focus {
            text-decoration: none;
            background-color: transparent;
            background-image: none;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
            cursor: not-allowed;
        }
        .dropdown-menu-lg .dropdown-header {
            color: #428bca;
            font-size: 18px;
        }
        @media (max-width: 768px) {
            .dropdown-menu-lg {
                margin-left: 0 ;
                margin-right: 0 ;
            }
            .dropdown-menu-lg > li {
                margin-bottom: 30px;
            }
            .dropdown-menu-lg > li:last-child {
                margin-bottom: 0;
            }
            .dropdown-menu-lg .dropdown-header {
                padding: 3px 15px !important;
            }
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-fixed-top" style="background: #F4F4F4; border: none;">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ route('home') }}" style="color: #267AB7; font-weight: bolder; font-size: 25px">
                    Mediaverse
                </a>
            </div>

            <div class="collapse navbar-collapse pull-right" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    {{--<li><a href="{{ url('/diensten') }}">Diensten</a></li>--}}

                    <li class="dropdown dropdown-lg">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Diensten <b class="caret"></b></a>

                        <ul class="dropdown-menu dropdown-menu-lg row">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Web applicatie</li>
                                    <li><a href="{{route('page.websites')}}">Websites</a></li>
                                    <li><a href="{{route('page.laravel_websites')}}">Laravel websites</a></li>
                                    <li><a href="{{route('page.cms')}}">content management</a></li>
                                    <li><a href="{{route('page.hosting')}}">hosting en service</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Internetmarketing</li>
                                    <li><a href="{{route('page.internet_marketing')}}">zoekmachine optimalisatie</a></li>
                                    <li><a href="{{route('page.vindbaarheid')}}">Vindbaar op google</a></li>
                                    <li><a href="{{route('page.seo')}}">SEO</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">webwinkel</li>
                                    <li><a href="{{route('page.webshop')}}">webwinkels</a></li>
                                    <li><a href="{{route('page.laravel_webshop')}}">Laravel webwinkel</a></li>
                                    <li><a href="{{route('page.onderhoud')}}">Onderhoud</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Visueel</li>
                                    <li><a href="{{route('page.photography')}}">Fotografie</a></li>
                                    <li><a href="{{route('page.logo_illustratie')}}">Logo's & Illustratie</a></li>
                                    <li><a href="{{route('page.design')}}">Design</a></li>
                                </ul>
                            </li>
                        </ul>

                    </li>
                    <li><a href="{{ route('referenties') }}">Referenties</a></li>
                    <li><a href="{{ route('page.about') }}">Over ons</a></li>
                    <li><a href="{{ route('contact.create')}}">Contact</a></li>
                </ul>
                @if (Auth::check())
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="{{route('admin.dashboard')}}">Admin panel</a></li>
                    </ul>
                @endif
                <ul class="nav navbar-nav pull-right">
                </ul>
            </div>
        </div>

        <div class="" style="height: 25px; background-color: #267AB7; line-height: 25px;">
            <div class="container">
                <a href="/" class="fa fa-facebook-square" style="color: #fff;"></a>
                <a href="/" class="fa fa-twitter-square" style="color: #fff;"></a>
                <a href="/" class="fa fa-linkedin-square" style="color: #fff;"></a>
                <a href="/" class="fa fa-google-plus-square" style="color: #fff;"></a>

                <div class="pull-right">
                    <a href="" class="" style="color: #fff;">info@mediaverse.nl</a> <span style="color: #fff; padding: 0px 10px;"> | </span>
                    <span style="color: #fff;">06 53 77 97 61</span>
                </div>
            </div>
        </div>

    </nav>

    @yield('content')

    <footer class="footer">
        <div class="upper-footer">
            <div class="container">
                <div class="col-lg-3">
                    <h3 style="color: #fff;">Diensten</h3>
                    <ul class="list-unstyled">
                        <li>> <a href="{{ route('page.app') }}" style="color:#777;">Applicaties</a></li>
                        <li>> <a href="{{ route('page.seo') }}" style="color:#777;">Search engine optimization </a></li>
                        <li>> <a href="{{ route('page.hosting') }}" style="color:#777;">Hosting </a></li>
                        <li>> <a href="{{ route('page.hosting') }}" style="color:#777;">Logo / illustraties </a></li>
                        <li>> <a href="{{ route('page.hosting') }}" style="color:#777;">Fotografie </a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h3 style="color: #fff;">Contact</h3>
                    <span style="color: #777; margin-bottom: 20px;"><i class="fa fa-map-marker" style="color: #777;" aria-hidden="true"></i> Pietercoecke straat 14, 5643 VK Eindhoven</span>
                    <div class="clearfix" style="margin-bottom: 10px;"></div>

                    <span style="color: #fff;"><i class="fa fa-envelope" style="color: #777;" aria-hidden="true"></i> info@mediaverse.nl</span>
                    <div class="clearfix" style="margin-bottom: 10px;"></div>

                    <span style="color: #777;"><i class="fa fa-phone-square" style="color: #777;" aria-hidden="true"></i> +31 6 - 53779761</span>
                    <div class="clearfix" style="margin-bottom: 10px;"></div>
                    <div style="font-size:35px;">
                        <i class="fa fa-twitter-square" style="color: #3B5998; " aria-hidden="true"></i>
                        <i class="fa fa-facebook-square" style="color: #00ACED; " aria-hidden="true"></i>
                        <i class="fa fa-linkedin-square" style="color: #0077B5; " aria-hidden="true"></i>
                        <i class="fa fa-google-plus-square" style="color: #DC4A38; " aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-lg-4">
                    <br>
                    <span><img src="/images/icons/Slack CMYK.png" class="img-responsiv" style="height: 50px;">
                        <br>
                        <br>
                    {{--<p>The best communication with slack</p>--}}
                    <span><img src="/images/icons/laravel.png" class="img-responsive" style="height: 100px"></span>
                    {{--<p>We develop your software with laravel 5</p>--}}
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="container"><br>
                <ul class="bottom-stash pull-left">
                    <li><a style="color: #777 !important;" href="{{ route('page.algvoorwaarden') }}">algemene voorwaarden</a></li>
                    <li><a style="color: #777 !important;" href="{{ route('page.sitemap') }}">sitemap</a></li>
                    <li><a style="color: #777 !important;" href="{{ route('page.priverklaring') }}">privacy verklaring</a></li>
                    <li><a style="color: #777 !important;" href="{{ route('contact.create') }}">contact</a></li>
                </ul>
                <p class="text-muted pull-right">Copyright &copy; 2016 Mediaverse</p>
            </div>
        </div>
    </footer>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    @stack('scripts')

</body>
</html>
