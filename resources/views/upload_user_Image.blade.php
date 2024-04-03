
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
defer
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('assets/css/upload_box.css')}}">
<h1>Upload {{$oe_users['user_fname']}} Image</h1>
<body>
<div class="hero">

<form id="drop-area" method="POST" action={{url("/upload-user-image/".$oe_users['user_id'])}} enctype="multipart/form-data">
    @csrf
    <label for="input-file" >
    <input type="file" name="upload-image" accept="image/*" id="input-file" hidden>
    <div id="img-view">
        <img src="{{url('assets/img/users/img_user_icon.png')}}" alt="">
        <p>Drag and drop or click here<br> to upload image</p>
        <span>Upload any images from desktop.</span>
    </div>

    <button type="submit">UPLOAD</button></label>

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
    imageView.style.backgroundImage = `url(${imgLink})`;
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
