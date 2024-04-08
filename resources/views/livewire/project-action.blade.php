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
        <?php
        $user_id = 221;
        ?>
        <a href="{{ url('/toggle-liked/' . $project->proj_id).'/'.$user_id }}" style="color: inherit">
            <?php
            $isLiked = false;
            ?>
            @foreach ($oe_user_liked_project as $liked )
            @if ($liked->ulp_proj_id == $project->proj_id && $liked->ulp_user_id == $user_id)
            <?php
            $isLiked = true;
            ?>
            @endif
            @endforeach
            @if ($isLiked == true)

            <i class="fa-solid fa-star"></i>
            @else
            <i class="fa-regular fa-star"></i>
            @endif
        </a>
        {{-- <x-modal name="{{ $project->project_id }}" title="Edit Project" id="edit-box">
            <x-slot name="body">
                @livewire('edit-project', ['project' => $project])
            </x-slot>
        </x-modal> --}}
</div>
