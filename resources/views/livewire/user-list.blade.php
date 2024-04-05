<div>
    <table border="0">
        <tr>
            <th>#</th>
            <th>Student id</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Action</th>
        </tr>
        @foreach($oe_users as $user)
        <tr>
            <td>{{$user['user_id']}}</td>
            <td>{{$user['user_student_id']}}</td>
            <td>{{$user['user_fname']}}</td>
            <td> {{$user['user_lname']}}</td>
            <td>
                @livewire('user-action',[$user])
            </td>
        </tr>

        @endforeach
    </table>
    <span>
        {{$oe_users->appends(request()->input())->links()}}
    </span>
        <style>
            .w-5 {
                display: none;
            }
        </style>
        <script>
        </script>
</div>
