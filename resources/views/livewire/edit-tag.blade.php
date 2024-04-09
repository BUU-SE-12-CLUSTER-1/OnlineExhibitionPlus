<div>
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/form_input.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tag_selector.css') }}">
    <form wire:submit.prevent="updateTag">
        @csrf
        <label class="oe-input-label" for="tag_name">Name</label>
        <input class="oe-input" wire:model="name" type="text" name="tag_name" value="{{ $oe_tags['tag_name'] }}">
        <br>
        @error('name')
        <span class="oe-error">{{ $message }}</span>
        @enderror
        <br>
        <input class="buttonClear"  x-data x-on:click="$dispatch('close-modal')" wire:loading.attr="disabled" wire:loading.remove type="button" class="oe-button" value="Cancel" style="margin-left: 368px ; margin-top: 10px">
        <input wire:loading.attr="disabled" wire:loading.remove type="submit" class="buttonAdd" value="Save">
    </form>
    <script>
        setTimeout(function() {
    $('.oe-error').fadeOut('fast');
    }, 3000);
    </script>
    @livewireScripts <!-- Corrected livewireScripts from livewireStyles -->
</div>
