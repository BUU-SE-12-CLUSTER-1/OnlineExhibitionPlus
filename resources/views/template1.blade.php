{{-- <link rel="stylesheet" href="{{ asset('assets/css/select_template.css') }}">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
@extends('layouts.layout')
@section('title')
    home | Online Exhibition+
@endsection
@section('content')
    <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>


    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/select_template1.css') }}">
    </head>

    <body>
        <table>
            <tr>
                <td>
                    <div class="box1" type="text" ></div>
                </td>
                <td>
                    <div class="box2" type="text" ></div>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="detail" type="text" placeholder="Detail Project" >
                </td>
            </tr>
        </table>
    </body>
@endsection
