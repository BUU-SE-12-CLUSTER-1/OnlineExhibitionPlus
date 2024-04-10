<div>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('assets/css/homePage.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/button_home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/project_list.css') }}">

    <div class="search-container" style="position:relative;margin-left:990px;margin-top:-50px;">
        <input wire:model.live="search" style="padding-left: 10px;" type="text" class="search" name="search_project" placeholder="Search Project">
        <button type="button" class="search-button" name="btn_search_project">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div><br>
    <!--
    <table style="margin-top:-10px" border="1">
    <tr>
        <th>ID</th>
        <th>Project Name</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
        foreach ($oe_projects as $project)
    <tr>
        <td>project['proj_id']}}</td>
        <td>project['proj_name']}}</td>
        <td>project['proj_status']}}</td>
        <td>



        </td>
    </tr>
        endforeach
    </table>-->
<table>
    <tr>
        <div class="titleBlue" style="width: 1450px">
            <div >
                <h1 id="Manageproject" class="" style="color: #FFF">Favorite Project</h1>
            </div>
        </div>
    </tr>
    <?php
    $td_count = 1;
    $user_id = 9;
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
