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

    <body>
        <div class="profile_user">

            <div class="titleBlue1">
                <div>
                    <h1 class="title">Personal Information</h1>
                </div>
            </div>
            <div class="box" >
                <button type="button" id="edit" onclick="edit()"><i class="fa-solid fa-pen-to-square"></i></button>
                <form action="{{ url('/update-user-detail/' . $oe_users['user_id']) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <img id="img-user-image" src="{{ url($oe_users['user_profile_image']) }}" />
                    <div id="drop-area" style="display: none">
                        <label for="input-user-image">
                            <input type="file" name="upload-image" accept="image/*" id="input-user-image" hidden>
                            <div id="img-view">
                                <i class="fa-solid fa-images"></i>
                            </div>
                        </label>
                    </div>
                    <div class="detail">
                        <div class="none"></div>
                        <div id="user">
                            <p>Student ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label id="txt-student-id">{{ $oe_users['user_student_id'] }}</label>
                                <input type="text" maxlength="8" value="{{ $oe_users['user_student_id'] }}"
                                    id="input-student-id" name="student_id" style="display: none">
                            </p>
                            @error('student_id')
                                <div class="oe-error" style="color: rgb(219, 0, 0)" id="error1">{{ $message }}</div>
                            @enderror
                            <p>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label id="txt-fname">{{ $oe_users['user_fname'] }}</label>
                                <input type="text" maxlength="25" value="{{ $oe_users['user_fname'] }}" id="input-fname"
                                    name="first_name" style="display: none">
                            </p>
                            @error('first_name')
                                <div class="oe-error" style="color: rgb(219, 0, 0)" id="error2">{{ $message }}
                                </div>
                            @enderror
                            <p>Surname&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label id="txt-lname">{{ $oe_users['user_lname'] }}</label>
                                <input type="text" maxlength="25" value="{{ $oe_users['user_lname'] }}" id="input-lname"
                                    name="last_name" style="display: none">
                            </p>
                            @error('last_name')
                                <div class="oe-error" style="color: rgb(219, 0, 0)" id="error3">{{ $message }}
                                </div>
                            @enderror
                            <?php
                            foreach ($oe_majors as $major) {
                                if ($oe_users['user_major_id'] == $major['major_id']) {
                                    $user_major = $major['major_name'];
                                }
                            }
                            ?>
                            <p>Major&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label id="txt-major">{{ $user_major }}</label>
                                <select name="major" id="input-major" style="display: none">
                                    <option value="{{ $oe_users['user_major_id'] }}">{{ $user_major }}</option>
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
                            <label id="txt-email">{{ $oe_users['user_email'] }}</label>
                            <input type="text" maxlength="55" value="{{ $oe_users['user_email'] }}" id="input-email"
                                name="email" style="display: none">
                        </p>
                        @error('email')
                            <div class="oe-error" style="color: rgb(219, 0, 0); margin-left:22%" id="error5">
                                {{ $message }}</div>
                        @enderror
                        <p id="phone"><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label id="txt-phone">{{ $oe_users['user_phone'] }}</label>
                            <input type="text" maxlength="10" value="{{ $oe_users['user_phone'] }}" id="input-phone"
                                name="phone_number" style="display: none">
                        </p>
                        @error('phone_number')
                            <div class="oe-error" style="color: rgb(219, 0, 0); margin-left:22%" id="error6">
                                {{ $message }}</div>
                        @enderror
                        <button id="save" style="display: none" type="submit">Save</button>
                        <button id="cancel"
                            onclick="window.location='{{ url('/user-profile/' . $oe_users['user_id']) }}'"
                            style="display: none" type="button">Cancel</button>
                    </div>
                </form>
            </div>
            <div class="box_reset">
                <a href="" id="resetpassword" style="display: none">Change Password</a>
            </div>
            <div>
                <p id="txt_project">Project</p>
                @livewire('user-project-list', ['user_id' => $oe_users['user_id']])
            </div>
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

    </body>
@endsection
