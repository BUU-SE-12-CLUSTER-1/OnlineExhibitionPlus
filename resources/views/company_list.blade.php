<h1>Company List</h1>
<table border="1">
    <tr>
        <td>
            <label for="company_id">ID</label>
        </td>
        <td>
            <label for="company_name">Company Name</label>
        </td>
        <td>
            <label for="action">Action</label>
        </td>
    </tr>
    @foreach ($oe_companies as $company)
        <tr>
            <td>
                <label> {{ $company['company_id'] }} </label>
            </td>
            <td>
                <label> {{ $company['company_name'] }} </label>
            </td>
            <td>
                <a href={{ url('/delete-company/' . $company['company_id']) }}>Delete</a>
                <a href={{ url('/edit-company/' . $company['company_id']) }}>Edit</a>
            </td>
        </tr>
    @endforeach
</table>
<span>
    {{ $oe_companies->appends(request()->input())->links() }}
</span>
<style>
    .w-5 {
        display: none;
    }
</style>
