<div>
    <div style="margin-left:20px">
        <a href="{{ url('/delete-project/' . $project->proj_id) }}" style="color: inherit">
            <i class="fa-solid fa-trash-can"></i>
        </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="{{ url('/toggle-project/' . $project->proj_id) }}" style="color: inherit" x-on:click="$dispatch('open-modal', { name: '{{ $project->project_id }}' })">
            @if ($project->proj_status == 1)
            <i class="fa-solid fa-eye"></i>
            @else
            <i class="fa-solid fa-eye-slash"></i>
            @endif
        </a>

        </div>

        {{-- <x-modal name="{{ $project->project_id }}" title="Edit Project" id="edit-box">
            <x-slot name="body">
                @livewire('edit-project', ['project' => $project])
            </x-slot>
        </x-modal> --}}
</div>
