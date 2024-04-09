<div>
    <div style="margin-left:10px">
        <?php $isHasProject = false ?>
        @foreach ($user_projects as $user_project)
        @if($user_project->userproj_user_id == $user->user_id)
        <?php $isHasProject = true ?>
        @endif

        @endforeach
        @if ($user->user_role_id != '3')
        @if ($isHasProject == true)
        <a href="{{ url('/toggle-user/' . $user->user_id) }}" style="color:  rgba(255, 255, 255, 0);">
            @if ($user->user_status == 1)
            <i class="fa-solid fa-eye" style="color : rgb(0, 0, 0)" id="3"></i>
            @else
            <i class="fa-solid fa-eye-slash" style="color: rgb(0, 0, 0)" id="4"></i>
            @endif
        </a>
        @else
        <a href="#" x-data x-on:click="$dispatch('open-oe-alert', { name: 'delete-{{ $user->user_id }}' })"><i class="fa-solid fa-trash-can"></i></a>&nbsp;&nbsp;
        @endif
        @endif
    <a href="#" x-data x-on:click="$dispatch('open-modal', { name: '{{ $user->user_id }}' })"><i class="fa-solid fa-pen-to-square"></i></a>
    <a href="{{ url('/user-profile/' . $user->user_id) }}">Profile</a>
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
