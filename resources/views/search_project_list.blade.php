@extends('layouts.layout')
@section('title')
    project list | Online Exhibition+
@endsection
    @section('content')
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('assets/css/table.css') }}">
        <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
        {{-- <x-modal name="add-project" title="Add Project">
            <x-slot:body>
                <livewire:insert-project></livewire:insert-prjoect>
            </x-slot>
          </x-modal> --}}
        <button style="position:relative;margin-left:1269.5px;margin-top:-40px;" type="button" class="oe-button" x-data x-on:click="$dispatch('open-modal',{name : 'add-tag'})" name="btn_add_tag">Add
        Project</button>
        
        <livewire:search-project-list></livewire:search-project-list>
    @livewireScripts
@endsection

