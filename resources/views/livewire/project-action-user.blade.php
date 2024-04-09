<div>
    <?php
    $user_id = 9;
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
        <div style="margin-left:280px">
        <i class="fa-solid fa-star" style="color: gold"></i>
        @else
        <i class="fa-regular fa-star" style="color: gold"></i>
        </div>
        @endif

    </a>
</div>
