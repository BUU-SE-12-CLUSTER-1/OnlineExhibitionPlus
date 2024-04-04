<script src="https://kit.fontawesome.com/a87b92189d.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('assets/css/major_table.css')}}">
<link rel="import" href="component.html">
<h1>Major List</h1>
<table>
<tr>
    <th>ID</th>
    <th>Major Name</th>
    <th id="action">Action</th>
</tr>
@foreach ( $oe_majors as $major)
<tr>
    <td>{{$major['major_id']}}</td>
    <td>{{$major['major_name']}}</td>
    <td id="delete-icon">
        <a href=""><i class="fa-solid fa-trash-can"></i></a>
    </td>
</tr>
@endforeach
</table>



