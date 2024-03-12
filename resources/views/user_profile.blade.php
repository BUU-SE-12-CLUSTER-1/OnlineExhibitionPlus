<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<h1>{{$oe_users['user_fname']}} PROFILE</h1>
<img src="" alt="">
<form action="#" method="POST">
    @csrf
    <p>Name :
    <label id="txt-user-fname">{{$oe_users['user_fname']}}</label>
    <input type="text" value="{{$oe_users['user_fname']}}" id="input-user-fname" class="user_fname" style="display: none">
    <button id="edit-fname" onclick="edit('fname')" type="button">edit</button>
    <button id="save-fname" style="display: none" type="button">save</button>
    <button id="cancel-fname" onclick="cancel('fname')" style="display: none" type="button" >cancel</button>
</p>
</form>
<form action="#" method="POST">
    @csrf
    <p>Surname :
    <label id="txt-user-lname">{{$oe_users['user_lname']}}</label>
    <input type="text" value="{{$oe_users['user_lname']}}" id="input-user-lname" class="user_lname" style="display: none">
    <button id="edit-lname" onclick="edit('lname')" type="button">edit</button>
    <button id="save-lname" style="display: none" type="button">save</button>
    <button id="cancel-lname" onclick="cancel('lname')" style="display: none" type="button" >cancel</button>
</p>
</form>
<form action="#" method="POST">
    @csrf
    <p>Student Id :
    <label id="txt-user-student-id">{{$oe_users['user_student_id']}}</label>
    <input type="text" value="{{$oe_users['user_student_id']}}" id="input-user-student-id" class="user_student_id" style="display: none">
    <button id="edit-student-id" onclick="edit('student-id')" type="button">edit</button>
    <button id="save-student-id" style="display: none" type="button">save</button>
    <button id="cancel-student-id" onclick="cancel('student-id')" style="display: none" type="button" >cancel</button>
</p>
</form>
<?php
foreach ($oe_majors as $major) {
if($oe_users['user_major_id']==$major['major_id']){
    $user_major = $major['major_name'];
}
}

?>
<p>Major :
    <label id="txt-user-major">{{$user_major}}</label>
<select name="user_major_id" id="input-user-major" style="display: none">
    <option value={{$oe_users['user_major_id']}}>{{$user_major}}</option>
    @foreach($oe_majors as $major)
        <option value={{$major['major_id']}}>{{$major['major_name']}}</option>
    @endforeach
</select>
<button id="edit-major" onclick="edit('major')" type="button">edit</button>
<button id="save-major" style="display: none" type="button">save</button>
    <button id="cancel-major" onclick="cancel('major')" style="display: none" type="button" >cancel</button>
</p>
<h2>Contact</h2>
<p>------------------------------------------------------------</p>
<form action="#" method="POST">
    @csrf
    <p>Email :
    <label id="txt-user-email">{{$oe_users['user_email']}}</label>
    <input type="text" value="{{$oe_users['user_email']}}" id="input-user-email" class="user_email" style="display: none">
    <button id="edit-email" onclick="edit('email')" type="button">edit</button>
    <button id="save-email" style="display: none" type="button">save</button>
    <button id="cancel-email" onclick="cancel('email')" style="display: none" type="button" >cancel</button>
</p>
</form>
<form action="#" method="POST">
    @csrf
    <p>Phone number :
    <label id="txt-user-phone">{{$oe_users['user_phone']}}</label>
    <input type="text" value="{{$oe_users['user_phone']}}" id="input-user-phone" class="user_phone" style="display: none">
    <button id="edit-phone" onclick="edit('phone')" type="button">edit</button>
    <button id="save-phone" style="display: none" type="button">save</button>
    <button id="cancel-phone" onclick="cancel('phone')" style="display: none" type="button" >cancel</button>
</p>
</form>
<button type="button" onclick="window.location='{{url('/user-list')}}'">BACK</button>
<script>
    function edit(input){
        document.getElementById("txt-user-"+input).style.display = "none";
        document.getElementById("input-user-"+input).style.display = "inline";
        document.getElementById("edit-"+input).style.display = "none";
        document.getElementById("save-"+input).style.display = "inline";
        document.getElementById("cancel-"+input).style.display = "inline";
    }
    function cancel(input){
        document.getElementById("txt-user-"+input).style.display = "inline";
        document.getElementById("input-user-"+input).style.display = "none";
        document.getElementById("edit-"+input).style.display = "inline";
        document.getElementById("save-"+input).style.display = "none";
        document.getElementById("cancel-"+input).style.display = "none";
    }
</script>
