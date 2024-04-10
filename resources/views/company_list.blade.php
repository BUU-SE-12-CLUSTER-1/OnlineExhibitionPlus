@extends('layouts.layout')
@section('title')
Company list | Online Exhibition+
@endsection
@section('content')
@livewireStyles
<link rel="stylesheet" href="{{asset('assets/css/table.css')}}">
<x-modal name="add-company" title="Add Company">
    <x-slot:body>
        <livewire:insert-company></livewire:insert-company>
    </x-slot>
  </x-modal>

<button style="position:relative;margin-left:1250px;margin-top:-40px; width:160px;height:49px;" type="button" class="oe-button" x-data x-on:click="$dispatch('open-modal',{name : 'add-company'})" >Add Company</button>
<livewire:company-list></livewire:company-list>

@livewireScripts
@endsection
