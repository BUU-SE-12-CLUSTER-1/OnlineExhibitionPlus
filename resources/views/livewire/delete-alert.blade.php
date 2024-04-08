<div>
    @livewireStyles
    <div style="align-items:center; justify-content:center; text-align:center">
        <label style=" margin-bottom:10px; font-size:18px" >Are you sure to delete this {{$topic}}?</label>
    </div>
    @if ($topic === 'company')
           <button class="buttonClear"  x-data x-on:click="$dispatch('close-oe-alert')" style="margin-left: 1px ; margin-top: 20px">Cancel</button>
           <button class="buttonAdd" style="margin-left:112px"><a href="{{ url('/delete-company/'.$model->company_id) }}" >Delete</a></button>
    @elseif($topic === 'tag')
            <button class="buttonClear"  x-data x-on:click="$dispatch('close-oe-alert')" style="margin-left: 5px ; margin-top: 20px">Cancel</button>
            <button class="buttonAdd" style="margin-left:80px"><a href="{{ url('/delete-tag/'.$model->tag_id) }}" >Delete</a></button>
    @elseif($topic === 'advisor')
            <button class="buttonClear"  x-data x-on:click="$dispatch('close-oe-alert')" style="margin-left: 5px ; margin-top: 20px">Cancel</button>
            <button class="buttonAdd" style="margin-left:80px"><a href="{{ url('/delete-advisor/'.$model->advisor_id) }}" >Delete</a></button>
    @elseif($topic === 'user')
            <button class="buttonClear"  x-data x-on:click="$dispatch('close-oe-alert')" style="margin-left: 5px ; margin-top: 20px">Cancel</button>
            <button class="buttonAdd" style="margin-left:80px"><a href="{{ url('/delete-user/'.$model->user_id) }}" >Delete</a></button>

    @endif

</div>
