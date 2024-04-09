<div>
    <div style="margin-left: 30px">
        <?php $isHasProject = false ?>
        @foreach ($advisor_projects as $advisor_project)
        @if($advisor_project->proj_advisor_id == $advisor->advisor_id)
        <?php $isHasProject = true ?>
        @endif
        @endforeach
        <a title="Edit this advisor information." href="#" x-data x-on:click="$dispatch('open-modal', { name: '{{ $advisor->advisor_id }}' })"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;&nbsp;
        @if(!$isHasProject)
        <a title="Delete this advisor!!" href="#" x-data x-on:click="$dispatch('open-oe-alert', { name: 'delete-{{ $advisor->advisor_id }}' })"><i class="fa-solid fa-trash-can"></i></a>
        @else
        <a title="This advisor already has a project!"><i class="fa-solid fa-trash-can" style="color:#777777"></i></a>
        @endif



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


