@props(['name', 'title'])
<div x-data = "{ show : false, name:'{{ $name }}'}" x-show = "show"
    x-on:open-oe-alert.window = "show = ($event.detail.name === name)" x-on:close-oe-alert.window = "show = false"
    x-on:keydown.escape.window = "show = false" x-transition.duration.250ms class="fixed z-50 inset-0 ">
    <!-- CSS -->
    <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/modal.css') }}">
    <!-- CSS -->
    <div x-on:click="show = false" class="fixed inset-0 bg-gray-300 opacity-40"></div>
    <div class="backgroundWhite" style="padding-left: 30px; padding-right: 30px">
        <div><i class="fa-solid fa-circle-exclamation" style="font-size: 55px;margin-left:42%; padding-bottom: 26px; color: #4E6CEF; margin-top:30px;
            background: -webkit-linear-gradient(91deg,#9DBEFF 42.58%, #FED9FF);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
            </i></div>
        <div class="bodyAlert">
            {{ $body }}
        </div>
    </div>
</div>
