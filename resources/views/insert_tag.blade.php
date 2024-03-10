<form action="/insert-tag" method="POST">
    @csrf
    <label for="tag_name">Input Tag</label>
    <input type="text" name="tag_name"> <br>
    <button type="submit" value="submit">submit</button>
</form>
