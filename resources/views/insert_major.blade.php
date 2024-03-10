<form action="/insert-major" method="POST">
    @csrf
    <label for="major_name">Input Major</label>
    <input type="text" name="major_name"><br>
    <button type="submit" value="submit">submit</button>
</form>
