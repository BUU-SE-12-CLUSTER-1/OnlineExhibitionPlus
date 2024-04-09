<div>
    <form action="{{url('/change-password/'.$user_id)}}" method="POST">
    <label class="oe-input-label" for="password">New Password</label>
    <input class="oe-input" type="password" name="password">
    <br>
    <label class="oe-input-label" for="password_confirmation">Comfirm Password</label>
    <input class="oe-input" type="password" name="password_confirmation">
    <br>
    <input class="buttonAdd" style="padding-right:2%;padding-left:2%;width:fit-content" type="submit" value="Save Changes" />
</form>
</div>
