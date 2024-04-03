<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/css/new_navbar.css')}}">

        <!-- Styles -->
    </head>
    <body>
        <div class="top-navbar">
            <a href="#"><i id="hamberger-bar" class="fa-solid fa-bars"></i></a>
            <a href="#"><img id="web-logo" src="{{asset('assets/img/system/OE_LOGO.png')}}" alt=""></a>
            <a href="#"><img id="web-icon" src="{{asset('assets/img/system/OE_ICON.png')}}" alt=""></a>
        </div>
        <div id="button-area">
            @yield('button-area')
        </div>

        <div class="container py-2" id="main-content">
            @yield('content')
        </div>
        <div class="web-footer">
            <label id="faculty">Faculty of Informatics, Burapha University</label>
            <label id="copyright">Copyright © 2018-2022 Faculty of Informatics, Burapha University. All rights reserved.</label>
            <i id="location-icon" class="fa-solid fa-location-dot"></i>
            <div id="faculty-address">
            <label>Faculty of Informatics, Burapha University
                <br>
                169 Long Had Bangsaen Rd,
                <br>
                Saen Suk Chonburi  20131</label>
            </div>
            <i id="phone-icon" class="fa-solid fa-phone"></i>
            <i id="email-icon" class="fa-solid fa-envelope"></i>
            <div id="faculty-contact">
                <label>+66 (0)38-103061,<br>
                    +66 (0)38-10309
                    <br><br>
                    pr@informatics.buu.ac.th

                    </label>
            </div>
        </div>
        </body>

        <footer>

        </footer>
</html>
<script>
    @yield('scripts')
</script>
