@extends('layouts.layout')
@section('title')
    tag list | Online Exhibition+
@endsection
    @section('content')
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('assets/css/table.css') }}">
        <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
        <x-modal name="add-tag" title="Add Tag">
            <x-slot:body>
                <livewire:insert-tag></livewire:insert-tag>
            </x-slot>
          </x-modal>
        <button style="position:fixed;right:25px;margin-top:0;" type="button" class="oe-button" x-data x-on:click="$dispatch('open-modal',{name : 'add-tag'})" name="btn_add_user">Add
        Tag</button>
        <livewire:tag-list></livewire:tag-list>
    @livewireScripts
@endsection

