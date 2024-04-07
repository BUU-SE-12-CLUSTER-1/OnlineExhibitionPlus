<div>
    <a href="#" x-data x-on:click="$dispatch('open-modal', { name: '{{ $tag->tag_id }}' })">Edit</a>
    <a href="{{ url('/delete-tag/' . $tag->tag_id) }}"><i class="fa-solid fa-trash-can"></i></a>
    <x-modal name="{{ $tag->tag_id }}" title="Edit Tag" id="edit-box">
        <x-slot name="body">
            @livewire('edit-tag', ['tag' => $tag])
            <a href="">Delete</a>
        </x-slot>
    </x-modal>
</div>
