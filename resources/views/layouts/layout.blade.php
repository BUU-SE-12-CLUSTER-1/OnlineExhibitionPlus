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
        <link rel="stylesheet" href="{{asset('assets/css/navbar.css')}}">
        <!-- Styles -->
    </head>
    <body style="background-color: rgba(255, 109, 255, 0.699)">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
          <div class="side-nav">
            <ul class="nav-links">
                <li><a href="{{url('/user-list')}}"><i class="fa-solid fa-user"></i><p>User</p></a></li>
                <li><a href="#"><i class="fa-solid fa-paperclip"></i><p>Project</p></a></li>
                <li><a href="{{url('/advisor-list')}}"><i class="fa-solid fa-user-graduate"></i><p>Advisor</p></a></li>
                <div class="active"></div>
            </ul>
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
