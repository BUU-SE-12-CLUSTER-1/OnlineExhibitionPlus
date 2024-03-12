<h1>{{$oe_users['user_fname']}} PROFILE</h1>
<img src="" alt="">
<p>Name : {{$oe_users['user_fname']}}</p>
<p>Surname : {{$oe_users['user_lname']}}</p>
<p>Student Id : {{$oe_users['user_student_id']}}</p>
@foreach ($oe_majors as $major)
@if($oe_users['user_major_id']==$major['major_id'])
<p>Major : {{$major['major_name']}}</p>
@endif
@endforeach
<h2>Contact</h2>
<p>------------------------------------------------------------</p>
<p>Email : {{$oe_users['user_email']}}</p>
<p>Phone number : {{$oe_users['user_phone']}}</p>

