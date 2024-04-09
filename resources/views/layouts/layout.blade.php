<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/css/new_navbar.css')}}">
        <link rel="stylesheet" href="{{ asset('/assets/css/button.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/form_input.css') }}">
        <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
        @livewireStyles

    </head>
    <body>
        <div class="top-navbar" style="z-index:1;">
            <a href="javascript:hamberger_bar();"><i id="hamberger-bar" class="fa-solid fa-bars"></i></a>
            <a href="#"><img id="web-logo" src="{{asset('assets/img/system/OE_LOGO.png')}}" alt=""></a>
            <a href="#"><img id="web-icon" src="{{asset('assets/img/system/OE_ICON.png')}}" alt=""></a>
        </div>
        <div class="top-navbar" style="position: fixed;top:0;">
            <a href="javascript:hamberger_bar();"><i id="hamberger-bar" class="fa-solid fa-bars"></i></a>
            <a href="#"><img id="web-logo" src="{{asset('assets/img/system/OE_LOGO.png')}}" alt=""></a>
            <a href="#"><img id="web-icon" src="{{asset('assets/img/system/OE_ICON.png')}}" alt=""></a>
        </div>

        <div class="side-navbar" id="side-navbar">
            <button class="oe-button" style="font-weight: 900;margin-bottom:44px;margin-top:18px;">Add Project</button>
            <div class="side-nav-menu">
            <a href="{{url('/')}}" class="side-nav-menu">HOME</a>
            </div>
            <button class="dropdown-btn side-nav-menu">Project
                <i class="fa-solid fa-chevron-down"></i>
              </button>
            <div class="dropdown-container" style="display: none;">
                <a href="{{url('/project-list')}}">My Project</a>
                <a href="{{url('/project-list')}}">Manage Project</a>
                <a href="{{url('/fav-project')}}">Favorite Project</a>
                <a href="{{url('/advisor-list')}}">Manage Advisor</a>
                <a href="{{url('/company-list')}}">Manage Company</a>
                <a href="{{url('/tag-list')}}">Manage Tags</a>
            </div>
            <button class="dropdown-btn side-nav-menu">User
                <i class="fa-solid fa-chevron-down"></i>
              </button>
            <div class="dropdown-container">
                <a href="#">My Profile</a>
                <a href="{{url('/user-list')}}">Manage User</a>
            </div>

            <!--<button class="btn-logout" >LOG OUT</button>-->
            <div class="btn-logout">
                <a href="#" x-data x-on:click="$dispatch('open-oe-alert', { name: '{{url('/')}}' })" style="font-weight: 900;margin-left:-5px;color:#4E6CEF; margin-top:5px">Log out</a>
            </div>



        </div>
        <div id="button-area">
            @yield('button-area')
        </div>
        <div class="container py-2" id="main-content">

            @yield('content')


        </div>
        <x-oe-alert name="{{url('/')}}" style="z-index: 99999999999">
            <x-slot:body>
            @livewire('logout-alert', [])
            </x-slot>
          </x-oe-alert>
        <footer id="web-footer">
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
    </footer>
        </body>

        <footer>

        </footer>
</html>
<script>
    IsEnableHamberger_menu = false;

    function hamberger_bar() {
        if(IsEnableHamberger_menu == false) {
        document.getElementById("side-navbar").style.display = "block";
        IsEnableHamberger_menu = true;
    }else{

        document.getElementById("side-navbar").style.display = "none";
        IsEnableHamberger_menu = false;
    }
     };
</script>
<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
<script>
    @yield('scripts')
</script>
@livewireScripts
