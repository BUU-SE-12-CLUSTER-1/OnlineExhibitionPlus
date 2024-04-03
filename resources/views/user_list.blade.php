@extends('layouts.layout')
@section('title')
    user list | Online Exhibition+
@endsection
@section('content')
<script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{ asset('/assets/css/button_userlist.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/major_table.css')}}">
<form action={{url("/search-user")}} method="POST" name="form_search" >
    @csrf
    <div class="search_container" style="position:absolute;right:313px;margin-top:0;">
        <input style="padding-left: 10px;" type="text" class="search" name="search_user" placeholder="Search User">
        <button type="submit" class="search_button" name="btn_search_user">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div>
    </form>
    <button style="position:absolute;right:169px;margin-top:0;" type="button" class="add_excel" onclick="window.location='{{ url('/import-excel') }}'" name="btn_add_excel">Add
        Excel</button>
    <button style="position:absolute;right:25px;margin-top:0;" type="button" class="add_user" onclick="window.location='{{ url('/insert-user') }}'" name="btn_add_user">Add
        User</button>
<table border="0" style="margin-top: 65px">
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
            <a href={{url("/edit-user/".$user['user_id'])}}>Edit</a>
            <a href={{url("/delete-user/".$user['user_id'])}}><i class="fa-solid fa-trash-can"></i></a>
            <a href={{url("/user-profile/".$user['user_id'])}}>Profile</a>
        </td>
    </tr>
    @endforeach
</table>
<span>
    {{$oe_users->appends(request()->input())->links()}}
</span>

    <style>
        .w-5 {
            display: none;
        }
    </style>
@endsection
