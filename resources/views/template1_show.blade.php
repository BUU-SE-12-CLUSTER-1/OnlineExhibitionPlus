@extends('layouts.layout')
@section('title')
    home | Online Exhibition+
@endsection
@section('content')
    <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>

    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/output_template1.css') }}">
    </head>

    <body>
        <table>
            <tr>
                <td>
                    <div class="box1" >
                        <img class="img1" src="https://wallpapercave.com/wp/wp2273273.jpg" alt="Image 1" >
                    </div>
                </td>
                <td>
                    <div class="box2" >
                        <img class="img2" src="https://wallpapercave.com/wp/wp2273273.jpg" alt="Image 2">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="detail">
                        สิงโต
                    </div>
                </td>
            </tr>
        </table>
    </body>
@endsection
