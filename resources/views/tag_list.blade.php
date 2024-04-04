<h1>Tag List</h1>
<table border="1">
<tr>
    <td>ID</td>
    <td>Tag List</td>
    <td>Action</td>
</tr>
@foreach ($oe_tags as $tag)
<tr>
    <td>{{$tag['tag_id']}}</td>
    <td>{{$tag['tag_name']}}</td>
    <td>
        <a href="">Edit</a>
        <a href="">Delete</a>
    </td>
</tr>
@endforeach
</table>

