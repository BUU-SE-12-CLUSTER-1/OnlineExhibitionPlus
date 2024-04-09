<div>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('assets/css/homePage.css') }}">
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
    
    <?php
    $td_count = 1;
        ?>
    @foreach ($oe_projects as $project)
    @if ($td_count<5)
    <td>
        <livewire:project-manage-box :project="$project" :key="$project['proj_id']" />
    </td>
    <?php
    $td_count++;
    ?>
    @else
    </tr>
    <tr>
        <td>
            <livewire:project-manage-box :project="$project" :key="$project['proj_id']" />
        </td>
    <?php
    $td_count = 2;
    ?>
    
    @endif

@endforeach

</table>
<span>
    {{$oe_projects->appends(request()->input())->links()}}
</span>

@livewireScripts
<script></script>

@foreach ($oe_projects as $project)
    @if ($project != null)
<x-oe-alert name="delete-{{ $project->proj_id }}">
        <x-slot:body>
        @livewire('delete-alert', ['topic'=>'project', 'model' => $project])
        </x-slot>
        </x-oe-alert>
    @else    


    @endif

@endforeach
</div>
