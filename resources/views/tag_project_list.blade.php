@extends('layouts.layout')
@section('title')
tag search | Online Exhibition+
@endsection
    @section('content')
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('assets/css/table.css') }}">
        <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
        <Div> <h1> TAG : {{$tag->tag_name}}</h1> </Div>
        @livewire('tag-project-list',['tag_id'=>$tag->tag_id])
    @livewireScripts
@endsection

