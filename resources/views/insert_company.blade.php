<form action="/insert-company" method="POST">
    @csrf
    <label for="company_name">Input Company</label>
    <input type="text" name="company_name" ><br>
    <button type="submit" value="submit">submit</button>

</form>
