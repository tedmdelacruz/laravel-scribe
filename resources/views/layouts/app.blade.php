<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $app_name }} - {{ $app_desc }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/vendor/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-custom navbar-static-top">
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
                    {{ $app_name }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/write') }}">Write</a></li>
                    <li><a href="{{ url('/browse') }}">Browse</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <!-- <ul class="nav navbar-nav navbar-right">
                </ul> -->
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src={{ asset('js/vendor/jquery.min.js') }}></script>
    <script src={{ asset('js/vendor/bootstrap.min.js') }}></script>

    @yield('scripts')

</body>
</html>
