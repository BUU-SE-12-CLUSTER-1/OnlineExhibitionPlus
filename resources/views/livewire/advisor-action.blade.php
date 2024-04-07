<div>
    <a href="#" x-data x-on:click="$dispatch('open-modal', { name: '{{ $advisor->advisor_id }}' })">Edit</a>
    <a href="{{ url('/delete-advisor/' . $advisor->advisor_id) }}"><i class="fa-solid fa-trash-can"></i></a>
   
    <x-modal name="{{ $advisor->advisor_id }}" title="Edit Advisor" id="edit-box">
        <x-slot name="body">
            @livewire('edit-advisor', ['advisor' => $advisor])
        </x-slot>
    </x-modal>
</div>
