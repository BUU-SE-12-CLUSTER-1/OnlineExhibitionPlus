@extends('layouts.layout')
@section('title')
    user list | Online Exhibition+
@endsection
@section('content')
<script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{ asset('/assets/css/button.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/table.css')}}">
<form action={{url("/search-user")}} method="POST" name="form_search" >
    @csrf
    <div class="search-container" style="position:fixed;right:313px;margin-top:0;">
        <input style="padding-left: 10px;" type="text" class="search" name="search_user" placeholder="Search User">
        <button type="submit" class="search-button" name="btn_search_user">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div>
    </form>
    <button style="position:fixed;right:169px;margin-top:0;" type="button" class="oe-button" onclick="window.location='{{ url('/import-excel') }}'" name="btn_add_excel">Add
        Excel</button>
    <button style="position:fixed;right:25px;margin-top:0;" type="button" class="oe-button" onclick="window.location='{{ url('/insert-user') }}'" name="btn_add_user">Add
        User</button>
<table border="0">
    <tr>
        <th>#</th>
        <th>Student id</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Action</th>
    </tr>
    @foreach($oe_users as $user)
    <tr>
        <td>{{$user['user_id']}}</td>
        <td>{{$user['user_student_id']}}</td>
        <td>{{$user['user_fname']}}</td>
        <td> {{$user['user_lname']}}</td>
        <td>
            <a href="javascript:editUser({{$user}});">Edit</a>
            <a href={{url("/delete-user/".$user['user_id'])}}><i class="fa-solid fa-trash-can"></i></a>
            <a href={{url("/user-profile/".$user['user_id'])}}>Profile</a>
        </td>
    </tr>
    @endforeach
</table>
<div class="edit-box">

</div>
<span>
    {{$oe_users->appends(request()->input())->links()}}
</span>
    <style>
        .w-5 {
            display: none;
        }
    </style>
    <script>
        const editBox = document.querySelector('.edit-box');
        function editUser($user){
            editBox.innerHTML = "<x-edit-user :user='"+$user+"'/>";
        }
    </script>
@endsection
