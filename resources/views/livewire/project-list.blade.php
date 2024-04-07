<div>
    @livewireStyles
    <div class="search-container" style="position:relative;margin-left:990px;margin-top:-50px;">
        <input wire:model.live="search" style="padding-left: 10px;" type="text" class="search" name="search_project" placeholder="Search Project">
        <button type="button" class="search-button" name="btn_search_project">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div><br>
    <table style="margin-top:-10px" border="1">
    <tr>
        <th>ID</th>
        <th>Project Name</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
        @foreach ($oe_projects as $project)
    <tr>
        <td>{{$project['proj_id']}}</td>
        <td>{{$project['proj_name']}}</td>
        <td>{{$project['proj_status']}}</td>
        <td>

            <livewire:project-action :project="$project" :key="$project->id"></livewire:project-action>

        </td>
    </tr>
        @endforeach
    </table>
<span>
    {{$oe_projects->appends(request()->input())->links()}}
</span>
@livewireScripts
</div>
