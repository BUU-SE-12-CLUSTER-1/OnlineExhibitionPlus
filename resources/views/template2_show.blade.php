@extends('layouts.layout')
@section('title')
    home | Online Exhibition+
@endsection
@section('content')
    <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>


    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/output_template2.css') }}">
    </head>

    <body>
        <table>
            <tr>
                <td>
                    <div class="box1" >
                    <img class="img1" src="https://img.salehere.co.th/p/1200x0/2021/06/08/nbo0zdzxp6rd.jpg" alt="Image 1" >
                    </div>
                </td>
                <td>
                    <div class="box2"  >
                    <img class="img2" src="https://i1.sndcdn.com/artworks-rZkfgJHbQ8FVyD9q-1gLQdQ-t500x500.jpg" alt="Image 1" >
                    </div>
                </td>
            </tr>
            <tr>

                <td>
                    <div class="detail" >
                        แหมว
                    </div>
                    <div class = "box3" >
                    <img class="img3" src="https://www.catdumb.com/wp-content/uploads/2023/08/vivi.jpg" alt="Image 1" >
                    </div>
                </td>
            </tr>
        </table>
    </body>
@endsection
