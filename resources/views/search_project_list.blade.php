@extends('layouts.layout')
@section('title')
    Search Project | Online Exhibition+
@endsection
    @section('content')
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('assets/css/myfavoritepj.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/table.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/homePage.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/button_home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/project_list.css') }}">
        <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
        <form action="{{route('projects.search')}}" method="GET">
            @csrf
            <div class="search_container">
            <input type="text" class="search" name="search" placeholder="Search project here">
            <button type="submit" class="search_button" name="btn_search_user">
            <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
        </form>
        <div style="width:100%;height:80%;padding:500px">
        @foreach ($oe_projects as $project)
        <div style="display:flex;align-items: flex-start;">
        <div style=";border: 1px solid red; margin-right: 10px;">
        <div class="project pj_01" style="background-image: url('{{$project->proj_main_image}}') !important;white-space: nowrap; text-overflow: ellipsis;">
        </div>
            <div class="information_01" style="">

            @livewire('project-action',['project'=>$project])
                    {{-- <button type="button" class="star"></i></button> --}}
                    <div class="detail" >
                        <a style="color:inherit;color:white" href="{{url('/project-detail/'.$project->proj_id)}}"><h2>{{$project->proj_name}}</h2></a>
                        <?php
                        $isHasOwner = false;
                        ?>
                            @foreach ($oe_user_projects as $user_single_proj)
                            @foreach ($oe_users as $user)
                                @if($project->proj_id == $user_single_proj->userproj_proj_id && $user->user_id == $user_single_proj->userproj_user_id && $isHasOwner == false)
                                <p>Author : {{$user->user_fname}} {{$user->user_lname}}</p>
                                <?php
                                $isHasOwner = true;
                                ?>
                                @endif
                                @endforeach
                            @endforeach
                        @foreach ($oe_advisors as $advisor)
                        @if($project->proj_advisor_id == $advisor->advisor_id)
                        <p>Advisor : {{$advisor->advisor_title}} {{$advisor->advisor_fname}} {{$advisor->advisor_lname}}</p>
                        @endif
                        @endforeach

                        <div class="btn_tag">
                            <?php
                            $tag_count = 1;
                            $firstTagId = 0;
                            ?>
                            @foreach ($oe_project_tag as $proj_single_tag)
                                @foreach ($oe_tags as $tag)
                                @if ($tag_count == 1&& $project->proj_id == $proj_single_tag->projtag_proj_id && $tag->tag_id == $proj_single_tag->projtag_tag_id)
                                <?php $firstTagId = $tag->tag_id;
                                        $tag_count++;
                                ?>
                                <a href="{{url('/tag-search/'.$tag->tag_id)}}"><button class="tag1" style="white-space: nowrap;text-overflow: ellipsis;">{{$tag->tag_name}}</button></a>
                                @elseif ($tag_count == 2 && $tag->tag_id != $firstTagId &&$project->proj_id == $proj_single_tag->projtag_proj_id && $tag->tag_id == $proj_single_tag->projtag_tag_id)
                                <a href="{{url('/tag-search/'.$tag->tag_id)}}"><button class="tag2" style="white-space: nowrap;text-overflow: ellipsis;">{{$tag->tag_name}}</button></a>
                                <?php
                                $tag_count++;
                                ?>
                                @endif
                                @endforeach

                                @endforeach

                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
        @endforeach
    @livewireScripts
@endsection

