<div>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('assets/css/button.css') }}">
    <div class="search-container" style="position:relative;margin-left:1080px;margin-top:-50px;">
        <input wire:model.live="search" style="padding-left: 10px;" type="text" class="search" name="search_user" placeholder="Search User">
        <button type="button" class="search-button" name="btn_search_user" style="margin-left:20px">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div>

    <div class="table-div user-list">
    <table style="margin-top:-50px" border="1">
        <tr>
            <th>#</th>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach($oe_users as $user)
        <tr>
            <td>{{ $user->user_id }}</td>
            <td>{{ $user->user_student_id }}</td>
            <td>{{ $user->user_fname }}</td>
            <td>{{ $user->user_lname }}</td>
            <td>{{ $user->user_email }}</td>
            <td>
                <livewire:user-action :user="$user" :key="$user->user_id"></livewire:user-action>
            </td>
        </tr>
        @endforeach
    </table>
</div>
    <span>
        {{ $oe_users->appends(request()->input())->links() }}
    </span>

    @livewireScripts
</div>
