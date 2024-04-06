@extends('layouts.layout')
@section('title')
    home | Online Exhibition+
@endsection
@section('content')
    <link rel="stylesheet" href="{{ asset('/assets/css/template4.css') }}">
    <div class="container">
        <div class="box1">
            <div id="drop-area1" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="input-file1">
                    <input type="file" name="upload-image" accept="image/*" id="input-file1" hidden>
                    <div id="img-view1">
                    <img src="{{url('assets/img/system/img_project_icon.png')}}" alt="" style="width: 600px; height: 500px; object-fit: cover;">
                    </div>
                </label>
            </div>
        </div>
        <div class="box2">
            <div id="drop-area2" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="input-file2">
                    <input type="file" name="upload-image" accept="image/*" id="input-file2" hidden>
                    <div id="img-view2">
                    <img src="{{url('assets/img/system/img_project_icon.png')}}" alt="" style="width: 250px; height: 250px; object-fit: cover;">
                    </div> 
                </label>
            </div>
        </div>
        <div class="box3">
            <div id="drop-area3" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="input-file3">
                    <input type="file" name="upload-image" accept="image/*" id="input-file3" hidden>
                    <div id="img-view3">
                    <img src="{{url('assets/img/system/img_project_icon.png')}}" alt="" style="width: 250px; height: 250px; object-fit: cover;">
                    </div> 
                </label>
            </div>
        </div>
            <textarea class="detail" name="Detail_Project" id="detail_project" placeholder="Detail Project"></textarea>
            <script>
                                // เลือก textarea
                const textarea = document.getElementById('detail_project');

                // เมื่อมีการพิมพ์ใน textarea
                textarea.addEventListener('input', function() {
                    // ถ้า textarea ว่างเปล่า
                    if (!this.value.trim()) {
                        // กำหนด placeholder เป็นเนื้อหาของ textarea
                        this.setAttribute('placeholder', 'Detail Project');
                    } else {
                        // ถ้า textarea มีเนื้อหาอยู่
                        // ลบ placeholder ทิ้ง
                        this.removeAttribute('placeholder');
                    }
                });

            </script>
    </div>

    <script>
        const dropArea1 = document.getElementById("drop-area1");
        const inputFile1 = document.getElementById("input-file1");
        const imageView1 = document.getElementById("img-view1");

        inputFile1.addEventListener("change", uploadImage1);

        function uploadImage1(){
            let imgLink = URL.createObjectURL(inputFile1.files[0]);
            imageView1.querySelector('img').src = imgLink;
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
            let imgLink = URL.createObjectURL(inputFile2.files[0]);
            imageView2.querySelector('img').src = imgLink;
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
@endsection