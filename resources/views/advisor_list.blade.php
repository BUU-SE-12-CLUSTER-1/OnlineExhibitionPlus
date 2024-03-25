<h1>Advisor List</h1>
<table border="1">
<tr>
    <td>
        <label> id </label>
    </td>
    <td>
        <label for="advisor_title"> Title </label>
    </td>
<td>
    <label for="advisor_fname"> FisrtName </label>
</td>
<td>
    <label for="advisor_lname"> LastName </label>
</td>
<td>
    <label for="action"> Action </label>
</td>
</tr>
@foreach ($oe_advisors as $advisor)
    <tr>
        <td>
            <label> {{$advisor['advisor_id']}} </label>
        </td>
        <td>
            <label> {{$advisor['advisor_title']}} </label>
        </td>
        <td>
            <label>{{$advisor['advisor_fname']}}</label>
        </td>
        <td>
            <label>{{$advisor['advisor_lname']}}</label>
        </td>
        <td>
            <a href={{url("/delete-advisor/".$advisor['advisor_id'])}}>Delete</a>
            <a href={{url("/edit-advisor/".$advisor['advisor_id'])}}>Edit</a>
        </td>
    </tr>
@endforeach
</table>
<span>
    {{$oe_advisors->appends(request()->input())->links()}}
</span>
<style>
    .w-5{
        display: none;
    }
</style>
