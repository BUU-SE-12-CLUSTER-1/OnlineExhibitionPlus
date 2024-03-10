<form action="/edit-user" method="POST">
    @csrf
    <input type="hidden" name="user_id" value={{$oe_users['user_id']}}>
    <label for="user_student_id" >Student Id</label>
    <input type="text" name="user_student_id"  maxlength="8" value={{$oe_users['user_student_id']}} ></br>
    <label for="user_fname" >First name</label>
    <input type="text" name="user_fname" maxlength="25" value={{$oe_users['user_fname']}}></br>
    <label for="user_lname">Last name</label>
    <input type="text" name="user_lname" maxlength="25" value={{$oe_users['user_lname']}}></br>
    <label for="user_email">Email</label>
    <input type="text" name="user_email" maxlength="55"value={{$oe_users['user_email']}}></br>
    <label for="user_password">Password</label>
    <input type="password" name="user_password" maxlength="20"></br>
    <input type="radio" name="user_role" id="user_admin" value="1">
    <label for="user_admin">Admin</label>
    <input type="radio" name="user_role" id="user_student" value="2">
    <label for="user_student">Student</label>
    <input type="radio" name="user_role" id="user_guest" value="3">
    <label for="user_guest">Guest</label></br>
    <label for="user_major_id">major</label></br>
    <select name="user_major_id">
        @foreach($oe_majors as $major)
            <option value={{$major['major_id']}}>{{$major['major_name']}}</option>
        @endforeach
        </select><br>
    <button type="submit" value="Submit" >Update</button>

    </form>
