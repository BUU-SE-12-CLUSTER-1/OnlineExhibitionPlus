@extends('layouts.layout')
@section('title')
    home | Online Exhibition+
@endsection
@section('content')

<script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>


    <head>
        <link rel="stylesheet" href="{{ asset('assets\css\input_template4.css') }}">
    </head>

    <body>
        <table>
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
            </tr>
            <script>
        const dropArea1 = document.getElementById("drop-area1");
        const inputFile1 = document.getElementById("input-file1");
        const imageView1 = document.getElementById("img-view1");

        inputFile1.addEventListener("change", uploadImage1);

        function uploadImage1(){
            let imgLink1 = URL.createObjectURL(inputFile1.files[0]);
            imageView1.style.backgroundImage = `url(${imgLink1})`;
            imageView1.textContent="";
            imageView1.Style.border="0";
        }

        dropArea1.addEventListener("dragover", function(e){
            e.preventDefault();
        });

        dropArea1.addEventListener("drop", function(e){
            e.preventDefault();
            inputFile1.files = e.dataTransfer.files;
            uploadImage1();
        });

        const dropArea2 = document.getElementById("drop-area2");
        const inputFile2 = document.getElementById("input-file2");
        const imageView2 = document.getElementById("img-view2");

        inputFile2.addEventListener("change", uploadImage2);

        function uploadImage2(){
            let imgLink2 = URL.createObjectURL(inputFile2.files[0]);
            imageView2.style.backgroundImage = `url(${imgLink2})`;
            imageView2.textContent="";
            imageView2.Style.border="0";
        }

        dropArea2.addEventListener("dragover", function(e){
            e.preventDefault();
        });

        dropArea2.addEventListener("drop", function(e){
            e.preventDefault();
            inputFile2.files = e.dataTransfer.files;
            uploadImage2();
        });
    </script>
    <script>
        const dropArea3 = document.getElementById("drop-area3");
        const inputFile3 = document.getElementById("input-file3");
        const imageView3 = document.getElementById("img-view3");

        inputFile3.addEventListener("change", uploadImage3);

        function uploadImage3(){
            let imgLink3 = URL.createObjectURL(inputFile3.files[0]);
            imageView3.style.backgroundImage = `url(${imgLink3})`;
            imageView3.textContent="";
            imageView3.Style.border="0";
        }

        dropArea3.addEventListener("dragover", function(e){
            e.preventDefault();
        });

        dropArea3.addEventListener("drop", function(e){
            e.preventDefault();
            inputFile2.files = e.dataTransfer.files;
            uploadImage3();
        });
    </script>
        </table>
    </body>
@endsection