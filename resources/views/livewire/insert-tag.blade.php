<div>
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/form_input.css') }}">
    <form wire:submit.prevent="insertTag">
        @csrf
        <div>
            <label class="oe-input-name" for="tag_name">Tag name</label>
            <input class="oe-input" wire:model="name" type="text" name="tag_name">
            <br>
            @error('name')
            <span>{{ $message }}</span>
            @enderror
            </br>
        </div>
            <div>
            <button class="buttonClear" type="reset" value="reset">Clear</button>
            <button class="buttonAdd" type="submit" value="submit">Add</button>
            </div>
    </form>
    @livewireScripts
</div>
