<div>
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/form_input.css') }}">
    <form wire:submit.prevent="updateTag">
        @csrf
        <label class="oe-input-name" for="tag_name">Tag name</label>
        <input class="oe-input" wire:model="name" type="text" name="tag_name" value="{{ $oe_tags['tag_name'] }}">
        <br>
        @error('name')
        <span>{{ $message }}</span>
        @enderror
        <br> <!-- Use <br> instead of </br> -->
        <input class="buttonClear"  x-data x-on:click="$dispatch('close-modal')" wire:loading.attr="disabled" wire:loading.remove type="button" class="oe-button" value="Cancel" style="margin-left: 368px ; margin-top: 10px">
        <input wire:loading.attr="disabled" wire:loading.remove type="submit" class="buttonAdd" value="Save">
    </form>
    @livewireScripts <!-- Corrected livewireScripts from livewireStyles -->
</div>
