@props(['name', 'title'])
<div x-data = "{ show : false, name:'{{ $name }}'}" x-show = "show"
    x-on:open-alert.window = "show = ($event.detail.name === name)" x-on:close-alert.window = "show = false"
    x-on:keydown.escape.window = "show = false" x-transition.duration.250ms class="fixed z-50 inset-0 ">
    <!-- CSS -->
    <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/modal.css') }}">
    <!-- CSS -->
    <div x-on:click="show = false" class="fixed inset-0 bg-gray-300 opacity-40"></div>
    <div class="backgroundWhite ">
        <div class="titleBlue">
            <button class="buttonClose" x-on:click="$dispatch('close-modal')"><i class="fa-solid fa-xmark"></i></button>
            <!-- Close button ( X )-->
            @if (isset($title))
            <div class="titleAdduser">
                <label>{{ $title }}</label>
            </div>
            @endif
        </div>
        <div class="body">
            {{ $body }}
        </div>
    </div>
</div>
