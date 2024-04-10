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
        <form action="{{ url('/insert-tag') }}" method="POST">
            @csrf
            <div>
                <label class="company_tag_major__name" for="tag_name">Tag name</label>
            </div>
            <div>
                <input class="input_company_tag_major" type="text" name="tag_name">
                <br>
            @error('tag_name')
            <span class="oe-error">{{ $message }}</span>
            @enderror
            </br>
            </div>
            <div>
            <button class="buttonClear" type="reset" value="reset">Clear</button>
            <button class="buttonAdd" type="submit" value="submit">Add</button>
        </div>
        </form>
    </body>
@endsection
