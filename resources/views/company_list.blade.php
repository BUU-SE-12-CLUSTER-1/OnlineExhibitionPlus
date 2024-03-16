<h1>Company List</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Company Name</td>
        <td>Action</td>
    </tr>
    @foreach ($oe_companies as $company)
    <tr>
        <td>{{$company["company_id"]}}</td>
        <td>{{$company["company_name"]}}</td>
        <td>
            <a href="">Edit</a>
            <a href="">Delete</a>
        </td>
    </tr>
@endforeach
</table>
