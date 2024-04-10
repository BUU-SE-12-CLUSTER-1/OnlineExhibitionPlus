<div>
    <div style="margin-left:10px">
        <a title="Edit this user information." href="#" x-data x-on:click="$dispatch('open-modal', { name: '{{ $user->user_id }}' })"><i class="fa-solid fa-pen-to-square"></i></a>
        <?php $isHasProject = false ?>
        @foreach ($user_projects as $user_project)
        @if($user_project->userproj_user_id == $user->user_id)
        <?php $isHasProject = true ?>
        @endif
        @endforeach
        @if($user->user_role_id != '3')
        <a title="Toggle this user login permission." href="{{ url('/toggle-user/' . $user->user_id) }}" style="color:  rgba(255, 255, 255, 0);">
            @if ($user->user_status == 1)
            <i class="fa-solid fa-eye" style="color : rgb(0, 0, 0)" id="3"></i>
            @else
            <i class="fa-solid fa-eye-slash" style="color: rgb(0, 0, 0)" id="4"></i>
            @endif
        </a>
        @else
        <a title="This user has a role as an admin!"><i class="fa-solid fa-eye" style="color : #777777" id="3"></i></a>
        @endif

        @if ($isHasProject == true && $user->user_role_id != '3')
        <a title="This user already has a project!"><i class="fa-solid fa-trash-can" style="color: #777777" ></i></a>&nbsp;&nbsp;
        @elseif( $user->user_role_id == '3')
        <a title="This user has a role as an admin!"><i class="fa-solid fa-trash-can" style="color: #777777" ></i></a>&nbsp;&nbsp;
        @else
        <a title="Delete this user!!" href="#" x-data x-on:click="$dispatch('open-oe-alert', { name: 'delete-{{ $user->user_id }}' })"><i class="fa-solid fa-trash-can"></i></a>&nbsp;&nbsp;
        @endif

        @if($user->user_role_id != '1')
    <a title="Go to this user profile page." href="{{ url('/user-profile/' . $user->user_id) }}"><i class="fa-solid fa-user"></i></a>
    @else
    <a title="This user has a role as a Guest!" style="color:#777777"><i class="fa-solid fa-user"></i></a>
    @endif
        </div>

    <x-modal name="{{ $user->user_id }}" title="Edit User" id="edit-box">
        <x-slot name="body">

            @livewire('edit-user', ['user' => $user])

        </x-slot>
    </x-modal>
    <x-oe-alert name="delete-{{ $user->user_id }}">
        <x-slot:body>
        @livewire('delete-alert', ['topic'=>'user', 'model' => $user])
        </x-slot>
      </x-oe-alert>
</div>
