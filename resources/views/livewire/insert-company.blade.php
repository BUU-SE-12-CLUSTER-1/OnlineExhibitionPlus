
<div>
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/form_input.css') }}">
    <form wire:submit.prevent="insertCompany" action="">
        @csrf
        <div>
            <label class="oe-input-name" for="company_name">Company name</label>
            <input class="oe-input" wire:model="name" type="text" name="company_name" maxlength="100">
            <br>
            @error('name')
            <span class="text-danger-500">{{ $message }}</span>
            @enderror
            </br>
        </div>
        <div>
        <button class="buttonClear" type="reset" value="reset" style="margin-left: 368px ; margin-top: 10px">Cancle</button>
        <button class="buttonAdd" type="submit" value="submit">Submit</button>
    </div>
    </form>
    @livewireScripts
</div>