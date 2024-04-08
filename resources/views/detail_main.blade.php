@extends('layouts.layout')
@section('title')
    home | Online Exhibition+
@endsection
@section('content')
<script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/detail.css') }}">
    </head>
    <body>
        <div class="detail_project">
            <div class="head_project">
                <img class="img_project" src="https://i.pinimg.com/564x/73/7f/11/737f11ec89187836ccd587f753e5d998.jpg" alt="">
                <div class="haed_detail_project">
                    <h1 >Project Name</h1>
                    <p >Company : </p>
                    <p >Advisor : </p>
                    <p >School Year : </p>
                    <p >Tag : <button class="tag1">Tag A</button>
                            <button class="tag2">Tag B</button></p>
                    <div id="haed_detail_project">

                    <p >mix</p>
                    <p >mmmm</p>
                    <p >18</p>
                </div>
                </div>

            </div>
            <div class="comment">
                <h1>Comment</h1>
                <div class="comment_container">
                        <input type="text" class="comment_project" name="comment" placeholder="Comment project here">
                        <button type="submit" class="comment_button" name="btn_comment_project">
                        <i class="fa-solid fa-paper-plane"></i>
                        </button>
                </div>
            </div>
            <div class="member_head">
                <h1>Member</h1>
            </div>
            <div class="member">
                <img src="https://i.pinimg.com/564x/52/21/5b/52215b080622479563289ca8b8d89ba2.jpg" alt="">
                <p>Name : </p>
                <p><i class="fa-solid fa-envelope"></i></p>
                <div id="member_detail">
                    <p>mix</p>
                    <p>saksitt20044@gmail.com</p>
                </div>
            </div>
        </div>
    </body>
@endsection