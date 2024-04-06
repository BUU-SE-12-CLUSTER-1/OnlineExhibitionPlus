@extends('layouts.layout')
@section('title')
    home | Online Exhibition+
@endsection
@section('content')
    <link rel="stylesheet" href="{{ asset('/assets/css/template.css') }}">
        <div class="container">
            <div class="box1">
                    <div id="drop-area" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="input-file" >
                        <input type="file" name="upload-image" accept="image/*" id="input-file" hidden>
                            <div id="img-view1">
                                <img src="{{url('assets/img/system/img_project_icon.png')}}" alt="" style = "width:200px">
                            </div>
                        </label>
                        </form>
                    </div>

                    </body>
                    <script>
                        const dropArea1 = document.getElementById("drop-area1");
                        const inputFile1 = document.getElementById("input-file1");
                        const imageView1 = document.getElementById("img-view1");

                        inputFile.addEventListener1("change", uploadImage);

                        function uploadImage1(){
                            let imgLink = URL.createObjectURL(inputFile.files[0]);
                            imageView.style.backgroundImage = `url(${imgLink})`;
                            imageView.textContent = "";
                            imageView.style.border = 0;
                        }
                        dropArea.addEventListener1("dragover1", function(e){
                            e.preventDefault();
                        });
                        dropArea.addEventListener1("drop1", function(e){
                            e.preventDefault();
                            inputFile.files = e.dataTransfer.files;
                            uploadImage1();
                        });
                    </script>

                

            </div>
            <div>
                <div class="box2">
                    <div id="drop-area" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="input-file" >
                        <input type="file" name="upload-image" accept="image/*" id="input-file" hidden>
                            <div id="img-view2">
                                <img src="{{url('assets/img/system/img_project_icon.png')}}" alt="" style = "width:200px">
                            </div>
                        </label>
                        </form>
                    </div>

                    </body>
                    <script>
                        const dropArea2 = document.getElementById("drop-area2");
                        const inputFile2 = document.getElementById("input-file2");
                        const imageView2 = document.getElementById("img-view2");

                        inputFile.addEventListener2("change", uploadImage);

                        function uploadImage2(){
                            let imgLink = URL.createObjectURL(inputFile.files[0]);
                            imageView.style.backgroundImage = `url(${imgLink})`;
                            imageView.textContent = "";
                            imageView.style.border = 0;
                        }
                        dropArea.addEventListener2("dragover2", function(e){
                            e.preventDefault();
                        });
                        dropArea.addEventListener2("drop2", function(e){
                            e.preventDefault();
                            inputFile.files = e.dataTransfer.files;
                            uploadImage2();
                        });
                    </script>

                </div>
            
                <input type="text" class="detail" name="Detail_Project" placeholder="Detail Project">
            </div>
        </div>
    @endsection
