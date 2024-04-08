<div>
    <div style="margin-left:10px">
        <a href="#" x-data x-on:click="$dispatch('open-oe-alert', { name: 'delete-{{ $user->user_id }}' })"><i class="fa-solid fa-trash-can"></i></a>&nbsp;&nbsp;
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
