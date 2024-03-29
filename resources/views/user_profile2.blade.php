<link rel="stylesheet" href="{{asset('assets/css/upload_box.css')}}">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<h1>{{$oe_users['user_fname']}} PROFILE</h1>
<button type="button" id="edit" onclick="edit()">Edit</button>

<form action={{url("/update-user-detail/".$oe_users['user_id'])}} method="POST" enctype="multipart/form-data">
    @csrf
    <?php
    echo '<img id="img-user-image" src="data:image/png;base64,' . $oe_users['user_profile_image'] . '" style="width: 100px; height: 100px; object-fit: cover;"/>';
    ?>
    <div id="drop-area" style="display: none">
    <label for="input-user-image" >
        <input type="file" name="upload-image" accept="image/*" id="input-user-image" hidden>
        <div id="img-view">
            <p>Drag and drop or <br>click here<br> to upload image</p>
        </div>
    </label>
</div>
    <p>Name :
        <label id="txt-fname">{{$oe_users['user_fname']}}</label>
        <input type="text" maxlength="25" value="{{$oe_users['user_fname']}}" id="input-fname" name="user_fname" style="display: none">
    </p>
    <p>Surname :
        <label id="txt-lname">{{$oe_users['user_lname']}}</label>
        <input type="text" maxlength="25" value="{{$oe_users['user_lname']}}" id="input-lname" name="user_lname" style="display: none">
    </p>
    <p>Student Id :
        <label id="txt-student-id">{{$oe_users['user_student_id']}}</label>
        <input type="text" maxlength="8" value="{{$oe_users['user_student_id']}}" id="input-student-id" name="user_student_id" style="display: none">
    </p>
<?php
foreach ($oe_majors as $major) {
if($oe_users['user_major_id']==$major['major_id']){
    $user_major = $major['major_name'];
}
}
?>
    <p>Major :
        <label id="txt-major">{{$user_major}}</label>
        <select name="user_major_id" id="input-major" style="display: none">
            <option value={{$oe_users['user_major_id']}}>{{$user_major}}</option>
            @foreach($oe_majors as $major)
            <option value={{$major['major_id']}}>{{$major['major_name']}}</option>
            @endforeach
        </select>
    </p>
<h2>Contact</h2>
<p>------------------------------------------------------------</p>
    <p>Email :
        <label id="txt-email">{{$oe_users['user_email']}}</label>
        <input type="text" maxlength="55" value="{{$oe_users['user_email']}}" id="input-email" name="user_email" style="display: none">
    </p>
    <p>Phone number :
        <label id="txt-phone">{{$oe_users['user_phone']}}</label>
        <input type="text" maxlength="10" value="{{$oe_users['user_phone']}}" id="input-phone" name="user_phone" style="display: none">
    </p>
<button id="save" style="display: none" type="submit">save</button>
<button id="cancel" onclick="window.location='{{url('/user-profile/'.$oe_users['user_id'])}}'" style="display: none" type="button" >cancel</button>
</form>
<button type="button" onclick="window.location='{{url('/user-list')}}'">BACK</button>
<script>
    function edit(){
        document.getElementById("txt-fname").style.display = "none";
        document.getElementById("txt-lname").style.display = "none";
        document.getElementById("txt-student-id").style.display = "none";
        document.getElementById("txt-major").style.display = "none";
        document.getElementById("txt-email").style.display = "none";
        document.getElementById("txt-phone").style.display = "none";
        document.getElementById("img-user-image").style.display = "none";
        document.getElementById("input-fname").style.display = "inline";
        document.getElementById("input-lname").style.display = "inline";
        document.getElementById("input-student-id").style.display = "inline";
        document.getElementById("input-major").style.display = "inline";
        document.getElementById("input-email").style.display = "inline";
        document.getElementById("input-phone").style.display = "inline";
        document.getElementById("edit").style.display = "none";
        document.getElementById("save").style.display = "inline";
        document.getElementById("cancel").style.display = "inline";
        document.getElementById("drop-area").style.display = "inline";
    }
const dropArea = document.getElementById("drop-area");
const inputFile = document.getElementById("input-user-image");
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
