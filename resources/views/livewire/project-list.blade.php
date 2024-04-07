<div>
    @livewireStyles
    <div class="search-container" style="position:relative;margin-left:990px;margin-top:-50px;">
        <input wire:model.live="search" style="padding-left: 10px;" type="text" class="search" name="search_tag" placeholder="Search Tag">
        <button type="button" class="search-button" name="btn_search_tag">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div><br>
    <table style="margin-top:-10px" border="1">
    <tr>
        <th>ID</th>
        <th>Project Name</th>
        <th>Action</th>
    </tr>
        @foreach ($oe_projects as $project)
    <tr>
        <td>{{$project['proj_id']}}</td>
        <td>{{$project['proj_name']}}</td>
        <td>
{{--
            <livewire:tag-action :project="$project" :key="$project->id"></livewire:tag-action> --}}

        </td>
    </tr>
        @endforeach
    </table>
<span>
    {{$oe_projects->appends(request()->input())->links()}}
</span>
@livewireScripts
</div>
