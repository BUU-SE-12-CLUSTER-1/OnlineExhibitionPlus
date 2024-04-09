<div>
    <?php
    $user_id = 9;
    ?>

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
        <div style="margin-left:280px">
            <a title="Add this project to My favorite projects." href="{{ url('/toggle-liked/' . $project->proj_id).'/'.$user_id }}" style="color: gold"><i class="fa-solid fa-star" style="color: gold"></i></a>
        @else
        <a title="Remove this project from My favorite projects." href="{{ url('/toggle-liked/' . $project->proj_id).'/'.$user_id }}" style="color: white"><i class="fa-regular fa-star" style="color: gold"></i></a>
        </div>
        @endif


</div>
