<div>
    <a href="#" x-data x-on:click="$dispatch('open-modal', { name: '{{ $user->user_id }}' })">Edit</a>
    <a href="{{ url('/delete-user/' . $user->user_id) }}"><i class="fa-solid fa-trash-can"></i></a>
    <a href="{{ url('/user-profile/' . $user->user_id) }}">Profile</a>
    <x-modal name="{{ $user->user_id }}" title="Edit User" id="edit-box">
        <x-slot name="body">
            @livewire('edit-user', ['user' => $user])
        </x-slot>
    </x-modal>
</div>
