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
        <livewire:tag-project-list></livewire:tag-project-list>
    @livewireScripts
@endsection

