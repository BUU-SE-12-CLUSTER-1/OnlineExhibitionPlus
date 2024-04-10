@extends('layouts.layout')
@section('title')
    home | Online Exhibition+
@endsection
@section('content')
    <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>

    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/detail.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/homePage.css') }}">
    </head>

    <body>
        <div class="detail_project">
            <div class="head_project">
                <img class="img_project" src="{{ url($project->proj_main_image) }}" alt="">
                <div class="haed_detail_project">
                    <h1>{{ $project->proj_name }}</h1>
                    <?php
                    $company_name;
                    ?>
                    @foreach ($oe_companies as $company)
                        @if ($company->company_id == $project->proj_company_id)
                            <?php
                            $company_name = $company->company_name;
                            ?>
                        @endif
                    @endforeach
                    <p>Company : {{ $company_name }}</p>
                    <?php
                    $advisor_name;
                    ?>
                    @foreach ($oe_advisors as $advisor)
                        @if ($advisor->advisor_id == $project->proj_advisor_id)
                            <?php
                            $advisor_name = $advisor->advisor_title . ' ' . $advisor->advisor_fname . ' ' . $advisor->advisor_lname;
                            ?>
                        @endif
                    @endforeach
                    <p>Advisor : {{ $advisor_name }}</p>
                    <p>Tag :
                        <?php
                        $tag_count = 1;
                        $firstTagId = 0;
                        ?>

                        @foreach ($oe_project_tags as $proj_single_tag)
                            @foreach ($oe_tags as $tag)
                                @if (
                                    $tag_count == 1 &&
                                        $project->proj_id == $proj_single_tag->projtag_proj_id &&
                                        $tag->tag_id == $proj_single_tag->projtag_tag_id)
                                    <?php $firstTagId = $tag->tag_id;
                                    $tag_count++;
                                    ?>
                                    <a href="{{ url('/tag-search/' . $tag->tag_id) }}"><button class="tag1"
                                            style="width: fit-content">{{ $tag->tag_name }}</button></a>
                                @elseif (
                                    $tag_count == 2 &&
                                        $tag->tag_id != $firstTagId &&
                                        $project->proj_id == $proj_single_tag->projtag_proj_id &&
                                        $tag->tag_id == $proj_single_tag->projtag_tag_id)
                                    <a href="{{ url('/tag-search/' . $tag->tag_id) }}"><button class="tag2"
                                            style="width: fit-content">{{ $tag->tag_name }}</button></a>
                                    <?php
                                    $tag_count++;
                                    ?>
                                @endif
                            @endforeach
                        @endforeach
                    </p>
                    <div id="haed_detail_project">
                    </div>
                </div>
                <div class="project_content">
                    <x-template1_show />
                    <x-template2_show />
                    <x-template3_show />
                </div>
            </div>
            <div class="comment">
                <h1>Comment</h1>
                <?php $user_id = 9; ?>
                <form action="{{ url('/insert-comment/' . $project->proj_id . '/' . $user_id) }}" method="POST">
                    @csrf
                    <div class="comment_container">
                        <input type="text" class="comment_project" name="comment" placeholder="Comment project here">
                        <button type="submit" class="comment_button" name="btn_comment_project">
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                        @error('comment')
                            <span class="oe-error">{{ $message }}</span>
                        @enderror
                    </div>
                </form>
                <div style="width:600px; padding-bottom:20px">
                @foreach ($oe_comments as $comment)
                    @if ($project->proj_id == $comment->comment_proj_id)
                        <div class="comment-section" >
                            <div class="commentHeader" >
                                @foreach ($oe_users as $user)
                                    @if ($user->user_id == $comment->comment_user_id)
                                        <a href="{{ url('/user-profile/' . $user->user_id) }}">
                                            <h3 style="color: #FFF">{{ $user->user_fname }} {{ $user->user_lname }}</h3>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="commentBody" style="background: #FFF; padding:3%;border-radius: 15px 15px 15px 15px; ">
                                <p>{{ $comment->comment_text }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
                </div>
            </div>
            <div class="member_head">
                <h1>Member</h1>
            </div>
            <?php
            $member_id = [];
            ?>
            @foreach ($oe_project_users as $project_user)
                @foreach ($oe_users as $user)
                    @if ($project_user->userproj_proj_id == $project->proj_id && $project_user->userproj_user_id == $user->user_id)
                        <?php
                        $isDupicated = false;
                        for ($i = 0; $i < count($member_id); $i++) {
                            if ($user->user_id == $member_id[$i]) {
                                $isDupicated = true;
                            }
                        }
                        if (!$isDupicated) {
                            echo '<div class="member">
                                        <img src="' .
                                $user->user_profile_image .
                                '" alt="">
                                        <p>Name : <a href="' .
                                url('/user-profile/' . $user->user_id) .
                                '">' .
                                $user->user_fname .
                                ' ' .
                                $user->user_lname .
                                '</a></p>
                                        <p><i class="fa-solid fa-envelope"></i><a href="' .
                                url('/user-profile/' . $user->user_id) .
                                '">' .
                                $user->user_email .
                                '</a></p>
                                        <div id="member_detail">
                                        </div>
                                    </div>';
                            array_push($member_id, $user->user_id);
                        }
                        ?>
                    @endif
                @endforeach
            @endforeach
        </div>
    </body>
@endsection
