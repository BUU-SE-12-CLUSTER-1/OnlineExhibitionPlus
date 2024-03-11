<form action="{{url('/insert-user')}}" method="POST">
@csrf
<label for="user_student_id">Student Id</label>
<input type="text" name="user_student_id" maxlength="8"></br>
<label for="user_fname" maxlength="25">First name</label>
<input type="text" name="user_fname" maxlength="25"></br>
<label for="user_lname">Last name</label>
<input type="text" name="user_lname" maxlength="25"></br>
<label for="user_email">Email</label>
<input type="text" name="user_email" maxlength="55"></br>
<label for="user_password">Password</label>
<input type="password" name="user_password" maxlength="20"></br>
<label for="user_role_id">Role</label></br>
<select name="user_role_id">
@foreach($oe_roles as $role)
    <option value={{$role['role_id']}}>{{$role['role_name']}}</option>
@endforeach
</select><br>
<label for="user_major_id">major</label></br>
<select name="user_major_id">
@foreach($oe_majors as $major)
    <option value={{$major['major_id']}}>{{$major['major_name']}}</option>
@endforeach
</select><br></br>
<input type="submit" value="Submit">
<input type="button" value="Cancel" onclick="window.location='./user-list'">

</form>
