<form action="{{url('/insert-advisor')}}" method="POST">
    @csrf
    <label for="advisors_title">Title</label>
    <input type="text" name="advisor_title"><br>
    <label for="advisors_fname">Frist name</label>
    <input type="text" name="advisor_fname"><br>
    <label for="advisors_lname">Last name</label>
    <input type="text" name="advisor_lname"><br>
    <button type="submit" value="submint">submit</button>

</form>

