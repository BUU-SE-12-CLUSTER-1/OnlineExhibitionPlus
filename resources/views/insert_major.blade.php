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
        <form action="{{ url('/insert-major') }}" method="POST">
            @csrf
            <div>
                <label class="company_tag_major__name" for="major_name">Major name</label>
            </div>
            <div>
                <input class="input_company_tag_major" type="text" name="major_name">
            </div>
            <div>
            <button class="buttonClear" type="reset" value="reset">Clear</button>
            <button class="buttonAdd" type="submit" value="submit">Add</button>
        </div>
        </form>
    </body>
@endsection
