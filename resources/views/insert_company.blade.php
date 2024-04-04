@extends('layouts.layout')
@section('title')
    home | Online Exhibition+
@endsection
@section('content')
    <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/insert_company_tag_major.css') }}">
    </head>
    <body>
        <form action="{{ url('/insert-company') }}" method="POST">
            @csrf
            <div>
                <label class="company_name" for="company_name">Company name</label>
            </div>
            <div>
                <input class="input_company" type="text" name="company_name">
            </div><br>
            <button class="buttonClear" type="reset" value="reset">Clear</button>
            <button class="buttonAdd" type="submit" value="submit">Add</button>
        </form>
    </body>
@endsection
