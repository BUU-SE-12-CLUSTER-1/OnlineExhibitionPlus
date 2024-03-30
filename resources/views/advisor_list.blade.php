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
<style>
    .w-5{
        display: none;
    }
</style>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function deleteAlert(){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                   'success'
                ).then(function(){
                    window.location.replace('{{url("/delete-advisor/".$advisor_id);}}');
                });
            }
        })
    }
</script>
