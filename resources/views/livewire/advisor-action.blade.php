<div>
    <div style="margin-left: 30px">
        <a href="#" x-data x-on:click="$dispatch('open-oe-alert', { name: 'delete-{{ $advisor->advisor_id }}' })"><i class="fa-solid fa-trash-can"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="#" x-data x-on:click="$dispatch('open-modal', { name: '{{ $advisor->advisor_id }}' })"><i class="fa-solid fa-pen-to-square"></i></a>
    </div>

    <x-modal name="{{ $advisor->advisor_id }}" title="Edit Advisor" id="edit-box">
        <x-slot name="body">
            @livewire('edit-advisor', ['advisor' => $advisor])
        </x-slot>
    </x-modal>
    <x-oe-alert name="delete-{{ $advisor->advisor_id }}">
        <x-slot:body>
        @livewire('delete-alert', ['topic'=>'advisor', 'model' => $advisor])
        </x-slot>
      </x-oe-alert>
</div>


