@extends('layouts.layout')
@section('title')
Advisor list | Online Exhibition+
@endsection
@section('content')
@livewireStyles
<link rel="stylesheet" href="{{asset('assets/css/table.css')}}">
<button style="position:fixed;right:25px;margin-top:0;" type="button" class="oe-button" x-data x-on:click="$dispatch('open-modal',{name : 'add-advisor'})" >Add Company</button>
<table border="1">
    <tr>
        <th>
            ID
        </th>
        <th>
            Company Name
        </th>
        <th>
            Action
        </th>
    </tr>
    @foreach ($oe_companies as $company)
        <tr>
            <td>
                <label> {{ $company['company_id'] }} </label>
            </td>
            <td>
                <label> {{ $company['company_name'] }} </label>
            </td>
            <td>
                <a href={{ url('/delete-company/' . $company['company_id']) }}>Delete</a>
                <a href={{ url('/edit-company/' . $company['company_id']) }}>Edit</a>
            </td>
        </tr>
    @endforeach
</table>
<span>
    {{ $oe_companies->appends(request()->input())->links() }}
</span>
<style>
    .w-5 {
        display: none;
    }
</style>
@livewireScripts
@endsection
