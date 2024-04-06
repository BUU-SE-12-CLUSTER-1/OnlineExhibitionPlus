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

    <button style="position:fixed;right:169px;margin-top:0;" type="button" class="oe-button" x-data x-on:click="$dispatch('open-modal',{name : 'import-user'})" name="btn_add_excel">Add
        Excel</button>

    <button style="position:fixed;right:25px;margin-top:0;" type="button" class="oe-button" x-data x-on:click="$dispatch('open-modal',{name : 'add-user'})" name="btn_add_user">Add
        User</button>
        <livewire:user-list></livewire:user-list>
    @livewireScripts
@endsection
