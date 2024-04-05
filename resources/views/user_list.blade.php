@extends('layouts.layout')
@section('title')
    user list | Online Exhibition+
@endsection
@section('content')
@livewireStyles
<script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{ asset('/assets/css/button.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/table.css')}}">
<x-modal name="import-user" title="Import User">
    <x-slot:body>
        <livewire:import-user></livewire:import-user>
    </x-slot>
  </x-modal>
<x-modal name="add-user" title="Add User">
    <x-slot:body>
        <livewire:insert-user></livewire:insert-user>
    </x-slot>
  </x-modal>
<form action={{url("/search-user")}} method="POST" name="form_search" >
    @csrf
    <div class="search-container" style="position:fixed;right:313px;margin-top:0;">
        <input style="padding-left: 10px;" type="text" class="search" name="search_user" placeholder="Search User">
        <button type="submit" class="search-button" name="btn_search_user">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div>
    </form>
    <button style="position:fixed;right:169px;margin-top:0;" type="button" class="oe-button" x-data x-on:click="$dispatch('open-modal',{name : 'import-user'})" name="btn_add_excel">Add
        Excel</button>

    <button style="position:fixed;right:25px;margin-top:0;" type="button" class="oe-button" x-data x-on:click="$dispatch('open-modal',{name : 'add-user'})" name="btn_add_user">Add
        User</button>
        <livewire:user-list></livewire:user-list>
    @livewireScripts
@endsection
