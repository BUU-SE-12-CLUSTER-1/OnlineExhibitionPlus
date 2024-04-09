<div>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('assets/css/myfavoritepj.css') }}">
    <div class="search-container" style="position:relative;margin-left:990px;margin-top:-50px;">
        <input wire:model.live="search" style="padding-left: 10px;" type="text" class="search" name="search_project" placeholder="Search Project">
        <button type="button" class="search-button" name="btn_search_project">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div><br>
<table>
    <tr>
        <div class="titleBlue" style="width: 1450px">
            <div >
                <h1 id="Favoriteproject">Favorite Project</h1>
            </div>
        </div>
    </tr>
    <?php
    $td_count = 1;
    $user_id = 1;
        ?>
    @foreach ($oe_projects as $project)
    @foreach ($oe_user_liked_project as $user_liked_project)
        @if($user_liked_project->ulp_proj_id == $project->proj_id  && $user_id == $user_liked_project->ulp_user_id)

    @if ($td_count<4)
    <td>
        <livewire:project-view-box :project="$project" :key="$project['proj_id']" />
    </td>
    <?php
    $td_count++;
    ?>
    @else
    </tr>
    <tr>
        <td>
            <livewire:project-view-box :project="$project" :key="$project['proj_id']" />
        </td>
    <?php
    $td_count = 2;
    ?>
    @endif
    @endif
    @endforeach
@endforeach

</table>
<span>
    {{$oe_projects->appends(request()->input())->links()}}
</span>

@livewireScripts
<script></script>
</div>