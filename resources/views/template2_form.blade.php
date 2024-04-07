@extends('layouts.layout')
@section('title')
    home | Online Exhibition+
@endsection
@section('content')
    <script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>


    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/select_template2.css') }}">
    </head>

    <body>
        <table>
            <tr>
                <td>
                    <div class="box1">
                    <div id="drop-area" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="input-file" >
                        <input type="file" name="upload-image" accept="image/*" id="input-file" hidden>
                            <div id="img-view">
                                <img src="{{url('assets/img/users/DragHere.png')}}" alt="" style="width:150px">
                            </div>
                        </form>
                    </div>

                    </body>
                    <script>
                        const dropArea = document.getElementById("drop-area");
                        const inputFile = document.getElementById("input-file");
                        const imageView = document.getElementById("img-view");

                        inputFile.addEventListener("change", uploadImage);

                        function uploadImage(){
                            let imgLink = URL.createObjectURL(inputFile.files[0]);
                            imageView.style.backgroundImage = url(${imgLink});
                            imageView.textContent = "";
                            imageView.style.border = 0;
                        }
                        dropArea.addEventListener("dragover", function(e){
                            e.preventDefault();
                        });
                        dropArea.addEventListener("drop", function(e){
                            e.preventDefault();
                            inputFile.files = e.dataTransfer.files;
                            uploadImage();
                        });

                    </script>
                    </div>
                </td>

                <!-- BOX2 -->
                <td> 
                <div class="box2">
                    <div id="drop-area2">
                        <form method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="input-file2">
                                <input type="file" name="upload-image2" accept="image/*" id="input-file2" hidden>
                                <div id="img-view2">
                                    <img id="uploaded-image2" src="{{url('assets/img/users/DragHere.png')}}" alt="" style="width:150px">
                                </div>
                            </label>
                        </form>
                    </div>
                </div>

                <script>
                    const dropArea2 = document.getElementById("drop-area2");
                    const inputFile2 = document.getElementById("input-file2");
                    const imageView2 = document.getElementById("img-view2");
                    const uploadedImage = document.getElementById("uploaded-image2");

                    inputFile.addEventListener("change", uploadImage);

                    function uploadImage() {
                        const file = inputFile.files[0];
                        const reader = new FileReader();

                        reader.onload = function(e) {
                            uploadedImage.src = e.target.result;
                        }

                        reader.readAsDataURL(file);
                    }

                    dropArea.addEventListener("dragover", function (e) {
                        e.preventDefault();
                    });

                    dropArea.addEventListener("drop", function (e) {
                        e.preventDefault();
                        inputFile.files = e.dataTransfer.files;
                        uploadImage();
                    });
                </script>
                </td>
            </tr>

            <!-- BOX3 -->
            <tr>
                <td>
                    <input class="detail" type="text" placeholder="Detail Project">
                    <div class="box3">
                    <div id="drop-area" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="input-file" >
                        <input type="file" name="upload-image" accept="image/*" id="input-file" hidden>
                            <div class="dragImage3">
                                <img src="{{url('assets/img/users/DragHere.png')}}" alt="" style="width:150px">
                            </div>
                        </form>

                    </div>

                    </body>
                    <script>
                        const dropArea3 = document.getElementById("drop-area");
                        const inputFile3 = document.getElementById("input-file");
                        const imageView3 = document.getElementById("dragImage3");

                        inputFile.addEventListener("change", uploadImage);

                        function uploadImage(){
                            let imgLink = URL.createObjectURL(inputFile.files[0]);
                            imageView.style.backgroundImage = url(${imgLink});
                            imageView.textContent = "";
                            imageView.style.border = 0;
                        }
                        dropArea.addEventListener("dragover", function(e){
                            e.preventDefault();
                        });
                        dropArea.addEventListener("drop", function(e){
                            e.preventDefault();
                            inputFile.files = e.dataTransfer.files;
                            uploadImage();
                        });

                    </script>
                </div>
                </td>
            </tr>
        </table>
    </body>
@endsection
