@extends('layouts.layout')
@section('title')
Advisor list | Online Exhibition+
@endsection
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/table.css')}}">
<button style="position:fixed;right:25px;margin-top:0;" type="button" class="oe-button" onclick="window.location = '{{url('/insert-advisor')}}'">Add Advisor</button>
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
@endsection
