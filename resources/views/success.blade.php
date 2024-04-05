@extends('layouts.layout')
@section('title')
    user list | Online Exhibition+
@endsection
@section('content')
@livewireStyles

    <body class="antialiased">
          <x-modal name="1" title="Modal 1">
            <x-slot:body>
                <livewire:insert-user></livewire:insert-user>
            </x-slot>
          </x-modal>
          <x-modal name="2" title="Modal 2">
            <x-slot:body>
                <livewire:insert-user></livewire:insert-user>
            </x-slot>
          </x-modal>
          <button x-data x-on:click="$dispatch('open-modal',{name : '1'})" >Open Modal</button>
          <button x-data @click="$dispatch('open-modal',{name : '2'})" >Open Modal</button>
    </body>


@livewireScripts
@endsection
