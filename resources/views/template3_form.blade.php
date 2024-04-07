@extends('layouts.layout')
@section('title')
    home | Online Exhibition+
@endsection
@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('/assets/css/input_template3.css') }}">
</head>
    <table>
        <body>
            <td>
        <div class="box1">
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
        <div class="box2">
            <div id="drop-area2" method="POST" enctype="multipart/form-data">
                @csrf
                <form>
                <label for="input-file2">
                    <input type="file" name="upload-image" accept="image/*" id="input-file2" hidden>
                    <div id="img-view2">
                    <img class="icon2" src="{{url('assets/img/system/img_project_icon.png')}}" alt="" style="width: 200px;">
                    </div> 
                </label>
            </div>
            </form>
        
            <textarea class="detail" type="text" placeholder="Detail Project" ></textarea>
</td>
            
    

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
    </div>
    </body>
    </table>
@endsection