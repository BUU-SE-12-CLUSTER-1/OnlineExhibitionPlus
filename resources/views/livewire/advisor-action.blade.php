<div>
    <div style="margin-left:20px">
        <a href="{{ url('/delete-advisor/' . $advisor->advisor_id) }}"><i class="fa-solid fa-trash-can"></i></a> &nbsp;&nbsp;
   
        <a href="#" x-data x-on:click="$dispatch('open-modal', { name: '{{ $advisor->advisor_id }}' })"><i class="fa-solid fa-pen-to-square"></i></a>
    
    </div>
    
    <x-modal name="{{ $advisor->advisor_id }}" title="Edit Advisor" id="edit-box">
        <x-slot name="body">
            @livewire('edit-advisor', ['advisor' => $advisor])
        </x-slot>
    </x-modal>
</div>
