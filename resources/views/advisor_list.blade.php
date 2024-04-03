<h1> Advisor List </h1>
<table border="1">
<tr>
    <td>ID</td>
    <td>Frist name</td>
    <td>Last name</td>
    <td>Action</td>
</tr>

@foreach ($oe_advisors as $advisor)
<tr>
    <td>{{$advisor['advisor_id']}}</td>
    <td>{{$advisor['advisor_fname']}}</td>
    <td>{{$advisor['advisor_lname']}}</td>

    <td>
        <a href="">Edit</a>
        <a href="">Delete</a>
    </td>


</tr>
@endforeach
</table>
