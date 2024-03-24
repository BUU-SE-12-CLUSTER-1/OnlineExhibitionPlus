<html>
<h1>
    Major List
</h1>
<table border ="1">
<tr>
    <td>ID</td>
    <td>Maor name</td>
</tr>
@foreach( $oe_majors as $major)
<tr>
    <td>{{$major['major_id']}}</td>
    <td>{{$major['major_name']}}</td>
</tr>
@endforeach
</table>
</html>
