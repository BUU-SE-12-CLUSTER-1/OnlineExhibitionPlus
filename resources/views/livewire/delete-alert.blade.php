<div>
    @livewireStyles
    <div><i class="fa-solid fa-circle-exclamation" style="font-size: 50px;margin-left:160px; padding-bottom: 20px; color: #4E6CEF; margin-top:-20px;
        background: -webkit-linear-gradient(91deg,#9DBEFF 42.58%, #FED9FF);

;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;">
        </i></div>
    <div>
        <label style="margin-left: 50px; margin-bottom:10px">Are you sure to delete this {{$topic}}?</label>
    </div>
    @if ($topic = 'company')
           <button class="buttonClear"  x-data x-on:click="$dispatch('close-oe-alert')" style="margin-left: 50px ; margin-top: 20px">Cancel</button>
           <button class="buttonAdd" style="margin-left:80px"><a href="{{ url('/delete-company/'.$model->company_id) }}" >Delete</a></button>
        @else

        @endif
</div>
