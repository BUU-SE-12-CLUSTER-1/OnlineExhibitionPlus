<div>
    @livewireStyles
    <div class="search-container" style="position:fixed;right:313px;margin-top:-65px;">
        <input wire:model.live="search" style="padding-left: 10px;" type="text" class="search" name="search_user" placeholder="Search User">
        <button type="button" class="search-button" name="btn_search_user">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div>
    <div class="table-div">
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
            <td>{{ $user->user_id }}</td>
            <td>{{ $user->user_student_id }}</td>
            <td>{{ $user->user_fname }}</td>
            <td>{{ $user->user_lname }}</td>
            <td>
                <livewire:user-action :user="$user" :key="$user->id"></livewire:user-action>
            </td>
        </tr>
        @endforeach
    </table>
</div>
    <span>
        {{ $oe_users->appends(request()->input())->links() }}
    </span>
    <style>
        .w-5 {
            display: none;
        }
    </style>
    @livewireScripts
</div>
