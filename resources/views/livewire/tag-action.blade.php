<div>
    <div>
        <div style="margin-left: 30px">
        <?php $isHasProject = false ?>
        @foreach ($tag_projects as $tag_project)
        @if($tag_project->projtag_tag_id == $tag->tag_id)
        <?php $isHasProject = true ?>
        @endif
        @endforeach
        <a title="Edit this tag information." href="#" x-data x-on:click="$dispatch('open-modal', { name: '{{ $tag->tag_id }}' })"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;&nbsp;
        @if(!$isHasProject)
        <a title="Delete This tag!!" href="#" x-data x-on:click="$dispatch('open-oe-alert', { name: 'delete-{{ $tag->tag_id }}' })"><i class="fa-solid fa-trash-can"></i></a>
        @else
        <a title="This tag already has a project!"><i class="fa-solid fa-trash-can" style="color:#777777"></i></a>
        @endif

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



