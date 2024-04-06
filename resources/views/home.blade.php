@extends('layouts.layout')
@section('title')
    home | Online Exhibition+
@endsection
@section('content')
<script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/homePage.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/button_home.css') }}">
    </head>
    <body>
                <nav class="content_home">
                        <table>
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
                        </table>
                    @for ($i = 1; $i < 4; $i++)
                        <div class="project">
                            <div>
                                <button type="button" class="star"><i class="fa-solid fa-star"></i></button>
                            </div>
                            <div class="detail">
                                <h2>System {{$i}}</h2>
                                <p>Author : </p>
                                <p>Advisor : </p>
                                <div class="btn_tag">
                                    <button class="tag1">Tag A</button>
                                    <button class="tag2">Tag B</button>
                                </div>
                            
                            </div>
                        </div>
                    @endfor
            </div>

    </body>
@endsection


