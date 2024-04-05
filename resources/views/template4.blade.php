@extends('layouts.layout')
@section('title')
    home | Online Exhibition+
@endsection
@section('content')
    <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>


    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/select_template4.css') }}">
    </head>

    <body>
        <table>
            <tr>
                <td>
                    <div class="box1" type="text" ></div>
                </td>

                <td>
                    <input class="detail" type="text" placeholder="Detail Project" >
                </td>

                <tr>
                <td>
                    <div class="box2" type="text" ></div>
                </td>
                <td>
                    <div class = "box3" type="text" ></div>
                 </td>    
                </tr>
            </tr>
            <tr>
                <td>
                </td>
            </tr>
        </table>
    </body>
@endsection
