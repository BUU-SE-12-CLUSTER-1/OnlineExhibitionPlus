@extends('layouts.layout')
@section('title')
    user list | Online Exhibition+
@endsection
@section('content')
    <link rel="stylesheet" href="{{ asset('/assets/css/button_userlist.css') }}">
    <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
    <h1>User List</h1>
    <form action="{{ url('/search-user') }}" method="POST" name="form_search">
    @csrf
    <div class="search_container">
        <input type="text" class="search" name="search_user" placeholder="Search User">
        <button type="submit" class="search_button" name="btn_search_user"> 
            <i class="fa-solid fa-magnifying-glass"></i> 
        </button>
    </div>
    </form>
    <button type="button" class="add_excel" onclick="window.location='{{ url('/import-excel') }}'" name="btn_add_excel">Add
        Excel</button>
    <button type="button" class="add_user" onclick="window.location='{{ url('/insert-user') }}'" name="btn_add_user">Add
        User</button>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Student id</td>
            <td>Fullname</td>
            <td>roles</td>
            <td>Major</td>
            <td>Action</td>
        </tr>
        @foreach ($oe_users as $user)
            <tr>
                <td>{{ $user['user_id'] }}</td>
                <td>{{ $user['user_student_id'] }}</td>
                <td>{{ $user['user_fname'] }} {{ $user['user_lname'] }}</td>
                <?php
                foreach ($oe_roles as $role) {
                    if ($user['user_role_id'] == $role['role_id']) {
                        echo '<td>' . $role['role_name'] . '</td>';
                        break;
                    }
                }
                foreach ($oe_majors as $major) {
                    if ($user['user_major_id'] == $major['major_id']) {
                        echo '<td>' . $major['major_name'] . '</td>';
                        break;
                    }
                }
                ?>
                <td>
                    <a href={{ url('/edit-user/' . $user['user_id']) }}>Edit</a>
                    <a href={{ url('/delete-user/' . $user['user_id']) }}>Delete</a>
                    <a href={{ url('/user-profile/' . $user['user_id']) }}>Profile</a>
                </td>
            </tr>
        @endforeach
    </table>
    <span>
        {{ $oe_users->appends(request()->input())->links() }}
    </span>

    <style>
        .w-5 {
            display: none;
        }
    </style>
@endsection
