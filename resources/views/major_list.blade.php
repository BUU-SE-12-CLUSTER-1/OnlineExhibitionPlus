<h1>Major List</h1>
<table border="1">
<tr>
    <td>ID</td>
    <td>Major Name</td>
    <td>Action</td>
</tr>
@foreach ( $oe_majors as $major)
<tr>
    <td>{{$major['major_id']}}</td>
    <td>{{$major['major_name']}}</td>
    <td>
        <a href="">Edit</a>
        <a href="">Delete</a>
    </td>
</tr>
@endforeach
</table>

