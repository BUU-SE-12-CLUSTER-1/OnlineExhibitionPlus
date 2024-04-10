@extends('layouts.layout')
@section('title')
    home | Online Exhibition+
@endsection
@section('content')
    <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/form_input.css') }}">
    </head>
    <body>
        <form action="{{ url('/insert-company') }}" method="POST">
            @csrf
            <div>
                <label class="oe-input-name" for="company_name">Company name</label>
            </div>
            <div>
                <input class="oe-input" type="text" name="company_name">
            </div>
            <div>
            <button class="buttonClear" type="reset" value="reset">Clear</button>
            <button class="buttonAdd" type="submit" value="submit">Add</button>
        </div>
        </form>
    </body>
@endsection
