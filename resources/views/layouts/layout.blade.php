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
    <body style="background-color: rgba(255, 168, 255, 0.699)">
        <div class="top-navbar">
            <a href="#"><img src="{{asset('assets/img/system/OE_LOGO.png')}}" alt=""></a>
        </div>

        <div class="container py-2" style="margin-top:2%;margin-left: 22%;background-color: #fff; border-radius: 25px; width:75%; align-items:center;justify-content:center;justify-items:center">
            @yield('content')
        </div>
        </body>
</html>
<script>
    let IsEnableHamberger_menu = false;
    $('#username').click(function(){
        if(IsEnableHamberger_menu == false){$('#hamberger-menu-container').css({
            'display' : 'block'
        });
        IsEnableHamberger_menu = true;
        }else{
            $('#hamberger-menu-container').css({
            'display' : 'none'
        });
        IsEnableHamberger_menu = false;
        };
    });
    function toggleHamberger(){
            $('#hamberger-menu-container').css({
            'display' : 'none'
        });
        IsEnableHamberger_menu = false;
    }
</script>
<script>
    @yield('scripts')
</script>
