<form action="/insert-advisors" method="POST">
    @csrf
    <label for="advisors_fname">Frist name</label>
    <input type="text" name="advisors_fname"><br>
    <label for="advisors_lname">Last name</label>
    <input type="text" name="advisors_lname"><br>
    <button type="submit" value="submint">submit</button>

</form>
