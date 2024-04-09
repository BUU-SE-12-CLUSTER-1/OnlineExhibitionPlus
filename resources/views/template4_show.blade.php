@extends('layouts.layout')
@section('title')
    home | Online Exhibition+
@endsection
@section('content')

<script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>


    <head>
        <link rel="stylesheet" href="{{ asset('assets\css\all_output_template.css') }}">
        <style>
            h1 {
                margin-bottom: 40px; /* Add margin-bottom to create space between h1 and rows */
            }
        </style>
    </head>

    <body>
        <table>
            <tr>
                <td colspan="2">
                    <h1> <!-- Move h1 inside td and colspan to span both columns -->
                        Template 4
                    </h1>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="template4_box1"  >
                    <img class="template4_img1" src="https://th.bing.com/th/id/OIP.vW7IunH-kNT11k_BsjE0vQHaEK?rs=1&pid=ImgDetMain" alt="Image 1" >
                    </div>
                </td>

                <td>
                    <div class="template4_detail">
                    หู
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="template4_box2" >
                    <img class="template4_img2" src="https://www.meme-arsenal.com/memes/f0635b0cfafc42bd0641fc4ee7787e18.jpg" alt="Image 1" >
                    </div>
                </td>
                <td>
                    <div class = "template4_box3"  >
                    <img class="template4_img3" src="https://th.bing.com/th/id/OIF.qz3cmi7j247UJ3CfQr1Qdg?rs=1&pid=ImgDetMain" alt="Image 1" >
                    </div>
                 </td>
            </tr>
        </table>
    </body>
@endsection
