@props(['oe_projects'])
<div>
    <link rel="stylesheet" href="{{ asset('assets/css/project_list.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/homePage.css') }}">
            <table>
                <tr>
                <div class="titleBlue" style="width: 1450px">
                    <div >
                        <h1 id="Manageproject">Manage Project</h1>
                    </div>
                </div>
            </tr>
                <?php
                $td_count = 1;
                    ?>
                @foreach ($oe_projects as $project)
                @if ($td_count < 4)
                    <td>
                        <div style="margin-bottom: 150%;z-index:99;display:flex;white-space: nowrap;text-overflow: ellipsis;">

                            <div style="text-overflow: ellipsis;white-space: nowrap;">
                                <div class="project pj_01" style="background-image: url('{{$project->proj_main_image}}') !important;white-space: nowrap; text-overflow: ellipsis;">
                                </div>
                                <div class="information_01" >
                                    @livewire('project-action',['project'=>$project])
                                            {{-- <button type="button" class="star"></i></button> --}}
                                            <div class="detail" >
                                                <a style="color:inherit;color:white" href={{url('/project-detail/'.$project->proj_id)}}><h2>{{$project->proj_name}}</h2></a>
                                                <?php
                                                $isHasOwner = false;
                                                ?>
                                                @foreach ($users as $user)
                                                    @foreach ($user_proj as $user_single_proj)
                                                        @if($project->proj_id == $user_single_proj->userproj_proj_id && $user->user_id == $user_single_proj->userproj_user_id && $isHasOwner == false)
                                                        <p>Author : {{$user->user_fname}} {{$user->user_lname}}</p>
                                                        <?php
                                                        $isHasOwner = true;
                                                        ?>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                                @foreach ($advisors as $advisor)
                                                @if($project->proj_advisor_id == $advisor->advisor_id)
                                                <p>Advisor : {{$advisor->advisor_title}} {{$advisor->advisor_fname}} {{$advisor->advisor_lname}}</p>
                                                @endif
                                                @endforeach

                                                <div class="btn_tag">
                                                    <?php
                                                    $tag_count = 1;
                                                    $firstTagId = 0;
                                                    ?>
                                                    @foreach ($proj_tag as $proj_single_tag)
                                                        @foreach ($tags as $tag)
                                                        @if ($tag_count == 1&& $project->proj_id == $proj_single_tag->projtag_proj_id && $tag->tag_id == $proj_single_tag->projtag_tag_id)
                                                        <?php $firstTagId = $tag->tag_id;
                                                                $tag_count++;
                                                        ?>
                                                        <a href="{{url('/tag-search/'.$tag->tag_id)}}"><button class="tag1">{{$tag->tag_name}}</button></a>
                                                        @elseif ($tag_count == 2 && $tag->tag_id != $firstTagId &&$project->proj_id == $proj_single_tag->projtag_proj_id && $tag->tag_id == $proj_single_tag->projtag_tag_id)
                                                        <a href="{{url('/tag-search/'.$tag->tag_id)}}"><button class="tag2">{{$tag->tag_name}}</button></a>
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
                        </div>
                    </td>
                    <?php
                        $td_count++;
                    ?>
                @else
                    </tr>

                    <tr style="background-color: white">
                        <td style="background-color: white">
                            <div style="margin-bottom: 150%;z-index:99;display:flex;white-space: nowrap;text-overflow: ellipsis;">

                                <div style="text-overflow: ellipsis;white-space: nowrap;">
                                    <div class="project pj_01" style="background-image: url('{{$project->proj_main_image}}') !important;white-space: nowrap; text-overflow: ellipsis;">
                                    </div>
                                    <div class="information_01" >
                                        @livewire('project-action',['project'=>$project])
                                                {{-- <button type="button" class="star"></i></button> --}}
                                                <div class="detail" >
                                                    <a style="color:inherit;color:white" href={{url('/project-detail/'.$project->proj_id)}}><h2>{{$project->proj_name}}</h2></a>
                                                    <?php
                                                    $isHasOwner = false;
                                                    ?>
                                                    @foreach ($users as $user)
                                                        @foreach ($user_proj as $user_single_proj)
                                                            @if($project->proj_id == $user_single_proj->userproj_proj_id && $user->user_id == $user_single_proj->userproj_user_id && $isHasOwner == false)
                                                            <p>Author : {{$user->user_fname}} {{$user->user_lname}}</p>
                                                            <?php
                                                            $isHasOwner = true;
                                                            ?>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                    @foreach ($advisors as $advisor)
                                                    @if($project->proj_advisor_id == $advisor->advisor_id)
                                                    <p>Advisor : {{$advisor->advisor_title}} {{$advisor->advisor_fname}} {{$advisor->advisor_lname}}</p>
                                                    @endif
                                                    @endforeach

                                                    <div class="btn_tag">
                                                        <?php
                                                        $tag_count = 1;
                                                        $firstTagId = 0;
                                                        ?>
                                                        @foreach ($proj_tag as $proj_single_tag)
                                                            @foreach ($tags as $tag)
                                                            @if ($tag_count == 1&& $project->proj_id == $proj_single_tag->projtag_proj_id && $tag->tag_id == $proj_single_tag->projtag_tag_id)
                                                            <?php $firstTagId = $tag->tag_id;
                                                                    $tag_count++;
                                                            ?>
                                                            <a href="{{url('/tag-search/'.$tag->tag_id)}}"><button class="tag1">{{$tag->tag_name}}</button></a>
                                                            @elseif ($tag_count == 2 && $tag->tag_id != $firstTagId &&$project->proj_id == $proj_single_tag->projtag_proj_id && $tag->tag_id == $proj_single_tag->projtag_tag_id)
                                                            <a href="{{url('/tag-search/'.$tag->tag_id)}}"><button class="tag2">{{$tag->tag_name}}</button></a>
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
                            </div>
                        </td>
                        <?php
                            $td_count = 1;
                        ?>
                @endif
            @endforeach
            </table>


<span>
    {{$oe_projects->appends(request()->input())->links()}}
</span>

</div>
