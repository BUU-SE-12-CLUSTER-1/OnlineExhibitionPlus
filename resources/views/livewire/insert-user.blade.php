
<div>
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/form_input.css') }}">
    @if (session('success'))

    <span>{{session('success')}}</span>

    @endif

    <form wire:submit.prevent="insertUser" action="">
        @csrf
        <label class="oe-input-label" for="user_student_id">Student ID</label>
        <input class="oe-input" wire:model="student_id" type="text" name="user_student_id" maxlength="8">
        <br>
        @error('student_id')
        <span class="oe-error">{{ $message }}</span>
        @enderror
        </br>
        <label class="oe-input-label" for="user_fname" maxlength="25">Name</label>
        <input class="oe-input" wire:model="fname" type="text" name="user_fname" maxlength="25"><br>
        @error('fname')
        <span class="oe-error">{{ $message }}</span>
        @enderror
        </br>
        <label class="oe-input-label" for="user_lname">Surname</label>
        <input class="oe-input" wire:model="lname" type="text" name="user_lname" maxlength="25"><br>
        @error('lname')
        <span class="oe-error">{{ $message }}</span>
        @enderror
        </br>
        <label class="oe-input-label" for="user_email">Email</label>
        <input class="oe-input" wire:model="email" type="text" name="user_email" maxlength="55"><br>
        @error('email')
        <span class="oe-error">{{ $message }}</span>
        @enderror
        </br>
        <label class="oe-input-label" for="user_password">Password</label>
        <input class="oe-input" wire:model="password" type="password" name="user_password" maxlength="20"><br></br>
        <label class="oe-input-label" for="user_major_id">Major</label>
        <select class="oe-input" wire:model="major_id" name="user_major_id">
            <option value="">--</option>
        @foreach($oe_majors as $major)
            <option value={{$major['major_id']}}>{{$major['major_name']}}</option>
        @endforeach
        </select><br>
        @error('major_id')
        <span class="oe-error">{{ $message }}</span>
        @enderror
        <br>
        <label class="oe-input-label" for="user_role_id">Role</label>
        <select class="oe-input" wire:model="role_id" name="user_role_id" style="width: fit-content;">
            <option value="">--</option>
        @foreach($oe_roles as $role)
            <option value={{$role['role_id']}}>{{$role['role_name']}}</option>
        @endforeach
        </select><br>
        @error('role_id')
        <span class="oe-error">{{ $message }}</span>
        @enderror
        <br></br>
        <div wire:loading>
            <span>Process ...</span>
        </div>
        <div></div>
        <input class="buttonClear" x-data x-on:click="$dispatch('close-modal')" wire:loading.attr="disabled" wire:loading.remove type="button" class="oe-button" value="Cancel" style="margin-left: 368px ; margin-top: 10px">
        <input wire:loading.attr="disabled" wire:loading.remove type="button" class="buttonAdd" value="Submit" wire:click="insertUser" >
        </form>
        @livewireScripts
        <script>
            setTimeout(function() {
    $('.oe-error').fadeOut('fast');
}, 6000);
        </script>
</div>
