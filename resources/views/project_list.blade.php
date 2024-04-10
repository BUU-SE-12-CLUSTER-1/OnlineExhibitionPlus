@extends('layouts.layout')
@section('title')
    project list | Online Exhibition+
@endsection
    @section('content')
    @livewireStyles

    <link rel="stylesheet" href="{{ asset('assets/css/table.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/form_input.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/homePage.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/button_home.css') }}">
        <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>


        <button style="position:relative;margin-left:1269.5px;margin-top:-40px;width:210px;" type="button" class="oe-button"name="btn_add_tag">Add Project</button>
        <livewire:project-list></livewire:project-list>
    @livewireScripts

@endsection

