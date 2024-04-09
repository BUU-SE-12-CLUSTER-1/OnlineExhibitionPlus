<div>
    <div style="margin-left:205px ">

        <a href="#" title="Edit this project."><i class="fa-solid fa-pen-to-square" style="color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);" id="2"></i></a>
        <a title="Toggle this project visibility." href="{{ url('/toggle-project/' . $project->proj_id) }}" style="color: rgba(0, 0, 0, 0);; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); margin-left: 5px;">
            @if ($project->proj_status == 1)
            <i class="fa-solid fa-eye" style="color:#fff"></i>
            @else
            <i class="fa-solid fa-eye-slash" style="color:#fff"></i>
            @endif

        </a>
        <a title="Delete this project!!" href="{{ url('/delete-project/' . $project->proj_id) }}" style="color: rgba(255, 255, 255, 0)">
            <i class="fa-solid fa-trash-can" style="color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); margin-left: 5px;" id="1"></i>

        </a>
        <?php
        $user_id = 9;
        ?>
        <a title="Add this project to My Favorite Projects." href="{{ url('/toggle-liked/' . $project->proj_id).'/'.$user_id }}" style="color: inherit; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); margin-left: 5px;">
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

