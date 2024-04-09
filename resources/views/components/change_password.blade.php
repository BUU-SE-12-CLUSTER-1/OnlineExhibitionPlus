@props('user_id')
<div style="padding:25px" >
    <form action="{{url('/change-password/'.$user_id)}}" method="POST"></form>
    <label for="password">New Password</label>
    <input type="password" name="password">
    <label for="password_confirmation">Comfirm Password</label>
    <input type="password" name="password_confirmation">
</div>
