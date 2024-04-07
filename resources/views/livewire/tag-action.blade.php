<div>
    <div style="margin-left:20px">
    <a href="{{ url('/delete-tag/' . $tag->tag_id) }}"><i class="fa-solid fa-trash-can"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="{{ url('/edit-tag/' . $tag->tag_id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
    </div>

    <x-modal name="{{ $tag->tag_id }}" title="Edit Tag" id="edit-box">
        <x-slot name="body">
            @livewire('edit-tag', ['tag' => $tag])
        </x-slot>
    </x-modal>
</div>
