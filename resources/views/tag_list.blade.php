@extends('layouts.layout')
@section('title')
    Tag list | Online Exhibition+
@endsection
    @section('content')
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('assets/css/table.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/button.css') }}">
        <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
        <x-modal name="add-tag" title="Add Tag">
            <x-slot:body>
                <livewire:insert-tag></livewire:insert-tag>
            </x-slot>
          </x-modal>
        <button style="position:relative;margin-left:1550px;margin-top:-40px;" type="button" class="oe-button" x-data x-on:click="$dispatch('open-modal',{name : 'add-tag'})" name="btn_add_tag">Add
        Tag</button>
        <livewire:tag-list></livewire:tag-list>
    @livewireScripts
@endsection

