<div>
    <div>
        <div style="margin-left: 30px">
        <?php $isHasProject = false ?>
        @foreach ($tag_projects as $tag_project)
        @if($tag_project->projtag_tag_id == $tag->tag_id)
        <?php $isHasProject = true ?>
        @endif
        @endforeach
        @if(!$isHasProject)
        <a href="#" x-data x-on:click="$dispatch('open-oe-alert', { name: 'delete-{{ $tag->tag_id }}' })"><i class="fa-solid fa-trash-can"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        @endif
        <a href="#" x-data x-on:click="$dispatch('open-modal', { name: '{{ $tag->tag_id }}' })"><i class="fa-solid fa-pen-to-square"></i></a>
    </div>

    <x-modal name="{{ $tag->tag_id }}" title="Edit Tag" id="edit-box">
        <x-slot name="body">
            @livewire('edit-tag', ['tag' => $tag])
        </x-slot>
    </x-modal>
    <x-oe-alert name="delete-{{ $tag->tag_id }}">
        <x-slot:body>
        @livewire('delete-alert', ['topic'=>'tag', 'model' => $tag])
        </x-slot>
      </x-oe-alert>
</div>



