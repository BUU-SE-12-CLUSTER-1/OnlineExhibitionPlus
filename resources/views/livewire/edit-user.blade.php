<div wire:ignore>
    <link rel="stylesheet" href="{{ asset('assets/css/form_input.css') }}">
    <form wire:submit="updateUser">
        @csrf
        <input type="hidden" name="user_id" value={{$oe_users['user_id']}}>
        <label class="oe-input-label" for="user_student_id" >Student Id</label>
        <input class="oe-input" wire:model="student_id" type="text" name="user_student_id"  maxlength="8" value={{$oe_users['user_student_id']}} /></br>
        @error('student_id')
        <span class="text-danger-500">{{ $message }}</span>
        @enderror
        </br>
        <label  class="oe-input-label"for="user_fname" >First name</label>
        <input class="oe-input" wire:model="fname" type="text" name="user_fname" maxlength="25" value={{$oe_users['user_fname']}}></br>
        @error('fname')
        <span class="text-danger-500">{{ $message }}</span>
        @enderror
        </br>
        <label class="oe-input-label" class="oe-input-label" for="user_lname">Last name</label>
        <input class="oe-input" wire:model="lname" type="text" name="user_lname" maxlength="25" value={{$oe_users['user_lname']}}></br>
        @error('lname')
        <span class="text-danger-500">{{ $message }}</span>
        @enderror
        </br>
        <label class="oe-input-label" for="user_email">Email</label>
        <input class="oe-input" wire:model="email" type="text" name="user_email" maxlength="55"value={{$oe_users['user_email']}}></br>
        @error('email')
        <span class="text-danger-500">{{ $message }}</span>
        @enderror
        </br>
        <label class="oe-input-label" for="user_password">Password</label>
        <input class="oe-input" wire:model="password" type="password" name="user_password" maxlength="20"></br>
        <label class="oe-input-label" for="user_role_id">Role</label></br>
        <select class="oe-input" wire:model="role_id" name="user_role_id">
            @foreach($oe_roles as $role) @if($oe_users['user_role_id']==$role['role_id']) <option value={{$role['role_id']}}>{{$role['role_name']}}</option>@endif @endforeach
            @foreach($oe_roles as $role)
                <option value={{$role['role_id']}}>{{$role['role_name']}}</option>
            @endforeach
        </select><br>
        @error('role_id')
        <span class="text-danger-500">{{ $message }}</span>
        @enderror
        <br>
        <label class="oe-input-label" for="user_major_id">major</label></br>
        <select class="oe-input" wire:model="major_id" name="user_major_id">
            @foreach($oe_majors as $major) @if($oe_users['user_major_id']==$major['major_id']) <option value={{$major['major_id']}}>{{$major['major_name']}}</option>@endif @endforeach
            @foreach($oe_majors as $major)
                <option value={{$major['major_id']}}>{{$major['major_name']}}</option>
            @endforeach
            </select><br>
            @error('major_id')
            <span class="text-danger-500">{{ $message }}</span>
            @enderror
            <br></br>
            <div wire:loading>
                <span>Process ...</span>
            </div>
            <div></div>
            <input wire:loading.attr="disabled" wire:loading.remove type="submit" class="buttonAdd" value="Submit">
            <input class="buttonClear"  x-data x-on:click="$dispatch('close-modal')" wire:loading.attr="disabled" wire:loading.remove type="button" class="oe-button" value="Cancel" >

    </form>

</div>
