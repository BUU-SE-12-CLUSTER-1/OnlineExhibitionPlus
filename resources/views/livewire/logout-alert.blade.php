<div>
    @livewireStyles
    <div style="align-items:center; justify-content:center; text-align:center">
        <label style=" margin-bottom:10px; font-size:18px" >Are you sure to logout?</label>
    </div>
    <button class="buttonClear"  x-data x-on:click="$dispatch('close-oe-alert')" style="margin-left: 1px ; margin-top: 20px">Cancel</button>
    <button class="buttonAdd" style="margin-left:112px;"><a href="{{ url('/403forbidden/') }}" style="color:inherit">Log out</a></button>
</div>
