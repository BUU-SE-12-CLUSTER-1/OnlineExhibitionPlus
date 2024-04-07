@extends('layouts.layout')
@section('title')
    home | Online Exhibition+
@endsection
@section('content')

<script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>


    <head>
        <link rel="stylesheet" href="{{ asset('assets\css\input_template4.css') }}">
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
                    <div class="box1" type="text" >
                        <div id="drop-area1" method="POST" enctype="multipart/form-data">
                        @csrf
                        <form>
                        <label for="input-file1">
                            <input type="file" name="upload-image1" accept="image/*" id="input-file1" hidden>
                            <div id="img-view1">
                            <img class="icon" src="{{url('assets/img/system/img_project_icon.png')}}" alt="" style="width:200px;">
                            </div>
                        </label>
                        </form>
                        </div>
                    </div>
                </td>

                <td>
                    <textarea class="detail" type="text" placeholder="Detail Project" ></textarea>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="box2" type="text" >
                        <div id="drop-area2" method="POST" enctype="multipart/form-data">
                        @csrf
                        <form>
                        <label for="input-file2">
                        <input type="file" name="upload-image" accept="image/*" id="input-file2" hidden>
                        <div id="img-view2">
                        <img class="icon2" src="{{url('assets/img/system/img_project_icon.png')}}" alt="" style="width: 200px;">
                        </label>
                        </div>
                         </form>
                        </div>
                    </div>
                </td>
                <td>
                    <div class = "box3" type="text" >
                        <div id="drop-area3" method="POST" enctype="multipart/form-data">
                        @csrf
                        <form>
                        <label for="input-file3">
                        <input type="file" name="upload-image" accept="image/*" id="input-file3" hidden>
                        <div id="img-view3">
                        <img class="icon3" src="{{url('assets/img/system/img_project_icon.png')}}" alt="" style="width: 200px;">
                        </label>
                        </div>
                         </form>
                        </div>
                    </div>
                 </td>
            </tr>
        </table>
    </body>
@endsection
