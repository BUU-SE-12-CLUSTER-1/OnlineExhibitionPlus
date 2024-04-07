@extends('layouts.layout')
@section('title')
    home | Online Exhibition+
@endsection
@section('content')
    <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>

    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/favorite.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/modal.css') }}">
    </head>

    <body>
        <nav class="content_home">
            <table>
                <div class="titleBlue" style="width: 1642px">
                    <div>
                        <h1 id="favoriteproject">Favorite Projects</h1>
                    </div>
                </div>

                    <td>
                    </td>
                    <td>

                        <div class="search_project">
                            <input type="text" class="search" name="search_project" placeholder="Search project here">
                            <button type="submit" class="search_button" name="btn_search_user">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </td>
                </div>
            </table>

            @for ($i = 1; $i < 10; $i++)
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
