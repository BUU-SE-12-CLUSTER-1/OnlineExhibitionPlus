@props(['name','title'])
<div
    x-data = "{ show : false, name:'{{$name}}'}"
    x-show = "show"
    x-on:open-modal.window = "show = ($event.detail.name === name)"
    x-on:close-modal.window = "show = false"
    x-on:keydown.escape.window = "show = false"
    x-transition.duration.250ms
    class="fixed z-50 inset-0">
    <div x-on:click="show = false" class="fixed inset-0 bg-gray-300 opacity-40"></div>
    <div class="bg-white opacity-100 rounded m-auto fixed inset-0 max-w-2xl" style="max-height:fit-content;padding-bottom:50px;" style="background: #FFF">
        @if(isset($title))
        <div class="py-3 flex items-center justify-center">
            <button x-on:click="$dispatch('close-modal')" style="position: fixed;">X</button>
            <label>{{$title}}</label>
        </div>
        @endif
        <div class="py-3 flex items-center justify-center">
            {{$body}}
        </div>
    </div>

</div>
