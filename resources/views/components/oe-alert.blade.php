@props(['name', 'title'])
<div x-data = "{ show : false, name:'{{ $name }}'}" x-show = "show"
    x-on:open-oe-alert.window = "show = ($event.detail.name === name)" x-on:close-oe-alert.window = "show = false"
    x-on:keydown.escape.window = "show = false" x-transition.duration.250ms class="fixed z-50 inset-0 ">
    <!-- CSS -->
    <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/modal.css') }}">
    <!-- CSS -->
    <div x-on:click="show = false" class="fixed inset-0 bg-gray-300 opacity-40"></div>
    <div class="backgroundWhite" style="background: #fff">
        <button class="buttonCloseAlert" x-on:click="$dispatch('close-oe-alert')"><i class="fa-solid fa-xmark"></i></button>
        <div class="bodyAlert">
            {{ $body }}
        </div>
    </div>
</div>
