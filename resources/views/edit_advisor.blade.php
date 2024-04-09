<h1>Edit Advisor</h1>
<form action={{url("/update-advisor/".$oe_advisors['advisor_id'])}} method="POST">
    <table>
    @csrf
    <tr>
        <td>
            <label for="advisor_title"> Title : </label>
        </td>
        <td>
            <input type="text" name="advisor_title" value={{$oe_advisors['advisor_title']}}>
        </td>
    </tr>
    <tr>
        <td>
            <label for="advisor_fname">Frist name : </label>
        </td>
        <td>
            <input type="text" name="advisor_fname" id="" value={{$oe_advisors['advisor_fname']}}>
        </td>
    </tr>
    <tr>
        <td>
            <label for="advisor_lname">Last name : </label>
        </td>
        <td>
            <input type="text" name="advisor_lname" id="" value={{$oe_advisors['advisor_lname']}}>
        </td>
    </tr>
    <tr>
        <button type="submit">Save</button>
    </tr>
    </table>
</form>
