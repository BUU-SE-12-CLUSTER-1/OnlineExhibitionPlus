@extends('layouts.layout')
@section('title')
    user list | Online Exhibition+
@endsection
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/upload_box.css') }}">
    <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/modal.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
    

        <div class="profile_user">

            <div class="titleBlue1">
                <div>
                    <h1 class="title">Personal Information</h1>
                </div>
            </div>
            <div class="box" >
                <button type="button" id="edit" onclick="edit()"><i class="fa-solid fa-pen-to-square"></i></button>
                <form action="{{ url('/update-user-detail/' . $user['user_id']) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <img id="img-user-image" src="{{ url($user['user_profile_image']) }}" />
                    <div id="drop-area" style="display: none">
                        <label for="input-user-image">
                            <input type="file" name="upload-image" accept="image/*" id="input-user-image" hidden>
                            <div id="img-view">
                                <i class="fa-solid fa-images"></i>
                            </div>
                        </label>
                    </div>
                    <div class="details">
                        <div class="none"></div>
                        <div id="user">
                            <p>Student ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label id="txt-student-id">{{ $user['user_student_id'] }}</label>
                                <input type="text" maxlength="8" value="{{ $user['user_student_id'] }}"
                                    id="input-student-id" name="student_id" style="display: none">
                            </p>
                            @error('student_id')
                                <div class="oe-error" style="color: rgb(219, 0, 0)" id="error1">{{ $message }}</div>
                            @enderror
                            <p>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label id="txt-fname">{{ $user['user_fname'] }}</label>
                                <input type="text" maxlength="25" value="{{ $user['user_fname'] }}" id="input-fname"
                                    name="first_name" style="display: none">
                            </p>
                            @error('first_name')
                                <div class="oe-error" style="color: rgb(219, 0, 0)" id="error2">{{ $message }}
                                </div>
                            @enderror
                            <p>Surname&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label id="txt-lname">{{ $user['user_lname'] }}</label>
                                <input type="text" maxlength="25" value="{{ $user['user_lname'] }}" id="input-lname"
                                    name="last_name" style="display: none">
                            </p>
                            @error('last_name')
                                <div class="oe-error" style="color: rgb(219, 0, 0)" id="error3">{{ $message }}
                                </div>
                            @enderror
                            <?php
                            foreach ($oe_majors as $major) {
                                if ($user['user_major_id'] == $major['major_id']) {
                                    $user_major = $major['major_name'];
                                }
                            }
                            ?>
                            <p>Major&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label id="txt-major">{{ $user_major }}</label>
                                <select name="major" id="input-major" style="display: none">
                                    <option value="{{ $user['user_major_id'] }}">{{ $user_major }}</option>
                                    @foreach ($oe_majors as $major)
                                        <option value="{{ $major['major_id'] }}">{{ $major['major_name'] }}</option>
                                    @endforeach
                                </select>
                            </p>
                            @error('major')
                                <div class="oe-error" style="color: rgb(219, 0, 0)" id="error4">{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <p id="line">______________________________________________________________________</p>
                        <h2 id="contact">Contact</h2>
                        <p id="email"><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label id="txt-email">{{ $user['user_email'] }}</label>
                            <input type="text" maxlength="55" value="{{ $user['user_email'] }}" id="input-email"
                                name="email" style="display: none">
                        </p>
                        @error('email')
                            <div class="oe-error" style="color: rgb(219, 0, 0); margin-left:22%" id="error5">
                                {{ $message }}</div>
                        @enderror
                        <p id="phone"><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label id="txt-phone">{{ $user['user_phone'] }}</label>
                            <input type="text" maxlength="10" value="{{ $user['user_phone'] }}" id="input-phone"
                                name="phone_number" style="display: none">
                        </p>
                        @error('phone_number')
                            <div class="oe-error" style="color: rgb(219, 0, 0); margin-left:22%" id="error6">
                                {{ $message }}</div>
                        @enderror
                        <button id="save" style="display: none" type="submit">Save</button>
                        <button id="cancel"
                            onclick="window.location='{{ url('/user-profile/' . $user['user_id']) }}'"
                            style="display: none" type="button">Cancel</button>
                    </div>
                </form>
            </div>
            <x-modal name="change-password" title="Change password" id="edit-box">
                <x-slot name="body">
                   @livewire('change-password',['user_id' => $user['user_id']])
                </x-slot>
            </x-modal>
            <div class="box_reset">
                <a href="#" x-data x-on:click="$dispatch('open-modal', { name: 'change-password' })" id="resetpassword" style="display: none">Change Password</a>
            </div>
            @foreach ($oe_projects as $project)


        <div>
        <p id="txt_project">Project</p>
        <div class="project pj_01" style="background-image: url('{{$project->proj_main_image}}') !important;white-space: nowrap; text-overflow: ellipsis;">
        </div>
        <div class="information_01" >

            @livewire('project-action',['project'=>$project])
                    {{-- <button type="button" class="star"></i></button> --}}
                    <div class="detail" >
                        <a style="color:inherit;color:white" href="{{url('/project-detail/'.$project->proj_id)}}"><h2>{{$project->proj_name}}</h2></a>
                        <?php
                        $isHasOwner = false;
                        ?>
                            @foreach ($oe_user_projects as $user_single_proj)
                                @if($project->proj_id == $user_single_proj->userproj_proj_id && $user->user_id == $user_single_proj->userproj_user_id && $isHasOwner == false)
                                <p>Author : {{$user->user_fname}} {{$user->user_lname}}</p>
                                <?php
                                $isHasOwner = true;
                                ?>
                                @endif
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
        @endforeach
    </div>

        <script>
            function edit() {
                document.getElementById("txt-fname").style.display = "none";
                document.getElementById("txt-lname").style.display = "none";
                document.getElementById("txt-student-id").style.display = "none";
                document.getElementById("txt-major").style.display = "none";
                document.getElementById("txt-email").style.display = "none";
                document.getElementById("txt-phone").style.display = "none";
                document.getElementById("img-user-image").style.display = "none";
                document.getElementById("input-fname").style.display = "inline";
                document.getElementById("input-lname").style.display = "inline";
                document.getElementById("input-student-id").style.display = "inline";
                document.getElementById("input-major").style.display = "inline";
                document.getElementById("input-email").style.display = "inline";
                document.getElementById("input-phone").style.display = "inline";
                document.getElementById("edit").style.display = "none";
                document.getElementById("save").style.display = "inline";
                document.getElementById("resetpassword").style.display = "inline";
                document.getElementById("cancel").style.display = "inline";
                document.getElementById("drop-area").style.display = "inline";
            }
            const dropArea = document.getElementById("drop-area");
            const inputFile = document.getElementById("input-user-image");
            const imageView = document.getElementById("img-view");

            inputFile.addEventListener("change", uploadImage);

            function uploadImage() {
                let imgLink = URL.createObjectURL(inputFile.files[0]);
                imageView.style.backgroundImage = `url(${imgLink})`;
                imageView.textContent = "";
                imageView.style.border = 0;
            }
            dropArea.addEventListener("dragover", function(e) {
                e.preventDefault();
            });
            dropArea.addEventListener("drop", function(e) {
                e.preventDefault();
                inputFile.files = e.dataTransfer.files;
                uploadImage();
            });
        </script>
        <script>
            setTimeout(function() {
                $('.oe-error').fadeOut('fast');
            }, 6000);
        </script>
        </div>
@endsection
