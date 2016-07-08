<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="author" href="https://plus.google.com/[YOUR PERSONAL G+ PROFILE HERE]"/>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="awesome blog"/>
    <meta property="og:type" content="article"/>
    <meta property="og:image" content="http://www.google.com/some-thumbnail.jpg"/>
    <meta property="og:url" content="http://blog.google.com"/>
    <meta property="og:description" content=""/>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    @yield('css')

    <style>
        body {
            font-family: "Open Sans", Arial, sans-serif;
            margin-top: 50px
            /* Margin bottom by footer height */
            margin-bottom: 130px;
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
            height: 130px;
            background-color: #f5f5f5;
        }
        .page-header{
            background-color: #171717;
            height: 100px;
        }
        .breadcrumb{
            margin-top: 20px;
            background-color: transparent;
        }
        .page-header h1{
            margin-top: -25px;
            color: #ffffff;
            font-weight: 200;

            font-size: 2.6em;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-fixed-top">
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
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    {{--<li><a href="{{ url('/diensten') }}">Diensten</a></li>--}}
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Diensten
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            {{--<li role="separator" class="divider"></li>--}}
                            <li class="dropdown-header">Web applicatie</li>
                            <li><a href="#">Laravel websites</a></li>
                            <li><a href="#">contect management</a></li>
                            <li><a href="#">hosting en service</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Internetmarketing</li>
                            <li><a href="#">zoekmachine optimalisatie</a></li>
                            <li><a href="#">Vindbaar op google</a></li>
                            <li><a href="#"></a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">webwinkel</li>
                            <li><a href="#">webwinkels</a></li>
                            <li><a href="#">Laravel webwinkel</a></li>
                            <li><a href="#">Onderhoud</a></li>

                            {{--<li role="separator" class="divider"></li>--}}
                            {{--<li role="separator" class="divider"></li>--}}
                        </ul>
                    </li>
                    <li><a href="{{ url('/referenties') }}">Referenties</a></li>
                    <li><a href="{{ url('/over-ons') }}">Over ons</a></li>
                </ul>
                @if (Auth::check())
                    <ul class="nav navbar-nav pull-right">
                        <li><a>Admin panel</a> </li>
                    </ul>
                @endif
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="col-lg-3">
                <ul>
                    <li><a href="{{ url('/contact') }}">contact</a></li>
                    <li><a href="{{ url('/algemene-voorwaarden') }}">algemene voorwaarden</a></li>
                    <li><a href="{{ url('/sitemap') }}">sitemap</a></li>
                    <li><a href="{{ url('/privacy-verklaring') }}">privacy verklaring</a></li>
                    <li><a href="{{ url('/seo') }}">seo</a></li>
                    <li><a href="{{ url('/applicaties') }}">applicaties</a></li>
                </ul>
            </div>
            <p class="text-muted">Place sticky footer content here.</p>
        </div>
    </footer>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    @yield('js')

</body>
</html>