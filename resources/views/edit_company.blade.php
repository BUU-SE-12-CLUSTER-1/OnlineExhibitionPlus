<h1>Edit Company</h1>
<form action={{ url('/update-company/'.$oe_companies['company_id']) }} method="POST">
    <table>
        <tr>
            @csrf
            <td>
                <label for="company_name">Company name : </label>
            </td>
            <td>
                <input type="text" name="company_name" id="" value={{ $oe_companies['company_name'] }}>
            </td>
        </tr>
        <tr>
            <td >
                <button type="submit" style="margin-top: 10px">Save</button>
            </td>
        </tr>
    </table>
</form>
