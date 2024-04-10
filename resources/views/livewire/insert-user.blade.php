
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
        <span class="oe-error" style="margin-left: 50px">{{ $message }}</span>
        @enderror
        </br>
        <label class="oe-input-label" for="user_fname" maxlength="25">Firstname</label>
        <input class="oe-input" wire:model="first_name" type="text" name="user_fname" maxlength="25"><br>
        @error('user_fname')
        <span class="oe-error">{{ $message }}</span>
        @enderror
        </br>
        <label class="oe-input-label" for="user_lname">Lastname</label>
        <input class="oe-input" wire:model="last_name" type="text" name="user_lname" maxlength="25"><br>
        @error('user_lname')
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

        <div class="password">
            <input class="oe-input"  wire:model="password" type="password" name="user_password" maxlength="20">

            <i class="fa-solid fa-eye-slash pass-icon" id="eye-icon"  onclick="togglePasswordVisibility()"></i>
        </div>



        <br></br>


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
            function togglePasswordVisibility() {
    var passwordInput = document.getElementsByName("user_password")[0];
    var eyeIcon = document.getElementById("eye-icon");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.className = "fa-solid fa-eye";
    } else {
        passwordInput.type = "password";
        eyeIcon.className = "fa-solid fa-eye-slash pass-icon";
    }
}


            setTimeout(function() {
    $('.oe-error').fadeOut('fast');
}, 6000);






        </script>
</div>
