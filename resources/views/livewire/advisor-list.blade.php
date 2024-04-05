<div>
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
            <a href="javascript: deleteAlert();" id="delete">Delete</a>
            <a href={{url("/edit-advisor/".$advisor['advisor_id'])}}>Edit</a>
            <button type="button" onclick="deleteAlert()">DELETE</button>
            <button type="button" class="btn btn-danger;" onclick="deleteAlert()">Delete</button>
        </td>
    </tr>
@endforeach
</table>
<span>
    {{$oe_advisors->appends(request()->input())->links()}}
</span>
</div>
