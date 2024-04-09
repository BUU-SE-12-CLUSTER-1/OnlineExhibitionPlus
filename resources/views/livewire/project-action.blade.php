
<div>
    <div style="margin-left:205px ">
        <a href="{{ url('/delete-project/' . $project->proj_id) }}" style="color: rgba(255, 255, 255, 0)">
            <i class="fa-solid fa-trash-can" style="color: white" id="1"></i>
            &nbsp;
        </a>
        <a href="#"><i class="fa-solid fa-pen-to-square" style="color: white" id="2"></i>
            &nbsp;</a>
        <a href="{{ url('/toggle-project/' . $project->proj_id) }}" style="color:  rgba(255, 255, 255, 0)">
            @if ($project->proj_status == 1)
            <i class="fa-solid fa-eye" style="color : white" id="3"></i>
            @else
            <i class="fa-solid fa-eye-slash" style="color: white" id="4"></i>
            @endif
        </a>
        <?php
        $user_id = 9;
        ?>
        <a href="{{ url('/toggle-liked/' . $project->proj_id).'/'.$user_id }}" style="color: rgba(255, 255, 255, 0)">
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
            <i class="fa-solid fa-star" style="color: gold"></i>
            &nbsp;
            @else
            <i class="fa-regular fa-star" style="color: white"></i>
            @endif
        </a>
        {{-- <x-modal name="{{ $project->project_id }}" title="Edit Project" id="edit-box">
            <x-slot name="body">
                @livewire('edit-project', ['project' => $project])
            </x-slot>
        </x-modal> --}}

</div>
