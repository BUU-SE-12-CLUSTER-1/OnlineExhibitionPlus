@extends('layouts.layout')

@section('title')
    home | Online Exhibition+
@endsection

@section('content')
<script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/button_home.css') }}">
    </head>

    <body>
        <table>
            <tr>
                <td id="recentpost">RECENT POSTS</td>
                <td>
                    <div class="dropdown">
                        <label class="years">Years</label>
                    </div>
                </td>
                <td>
                    <div class="search_container">
                        <input type="text" class="search" name="search_user" placeholder="Search project here">
                        <button type="submit" class="search_button" name="btn_search_user">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </td>
                <td>
                    <button class="buttonAdvanced">Advanced Search</button>
                </td>
            </tr>
        </table>
    </body>
@endsection


