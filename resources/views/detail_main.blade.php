@extends('layouts.layout')
@section('title')
    home | Online Exhibition+
@endsection
@section('content')
    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/detail.css') }}">
    </head>
    <body>
        <div class="detail_project">
            <div class="head_project">
                <img class="img_project" src="" alt="">
                <h1>Project Name</h1>
                <p>Company : </p>
                <p>Advisor : </p>
                <p>School Year : </p>
                <p>Tag : </p>
            </div>
            <div class="comment">
                
            </div>
        </div>
    </body>
@endsection