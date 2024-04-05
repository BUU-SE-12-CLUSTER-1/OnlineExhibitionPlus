<div>
    <div class="table-div">
<table border="0">
<tr>
        <th>
        id
    </th>
        <th>
         Title
    </th>
    <th>
    FisrtName
</th>
    <th>
    LastName
</th>
    <th>
   Action
</th>

</tr>
<?php $advisor_id = null?>
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
        <?php $advisor_id = $advisor['advisor_id']?>
        <td>
            <a href={{url("/delete-advisor/".$advisor['advisor_id'])}} id="delete">Delete</a>
            <a href={{url("/edit-advisor/".$advisor['advisor_id'])}}>Edit</a>
        </td>
    </tr>
@endforeach
</table>
</div>
<span>
    {{$oe_advisors->appends(request()->input())->links()}}
</span>
</div>
