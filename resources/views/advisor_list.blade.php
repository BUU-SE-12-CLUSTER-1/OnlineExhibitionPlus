@extends('layouts.layout')
@section('title')
Advisor list | Online Exhibition+
@endsection
@section('content')
@livewireStyles
<link rel="stylesheet" href="{{asset('assets/css/table.css')}}">

<x-modal name="add-advisor" title="Add Advisor">
    <x-slot:body>
    @livewire('insert-advisor')
    </x-slot>
</x-modal>
<x-modal name="edit-advisor" title="Edit Advisor">
    <x-slot:body>
    @livewire('edit-advisor')
    </x-slot>
</x-modal>
<button style="position:fixed;right:25px;margin-top:0;" type="button" class="oe-button" x-data x-on:click="$dispatch('open-modal',{name : 'add-advisor'})" >Add Advisor</button>

@livewire('advisor-list')

<style>
    .w-5{
        display: none;
    }
</style>
@livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection
