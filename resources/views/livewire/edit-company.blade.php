<div>
    <link rel="stylesheet" href="{{ asset('assets/css/form_input.css') }}">
    <form wire:submit="updateCompany">
    @csrf
    <label class="oe-input-label" for="company_name">Company name : </label>
    <input class="oe-input" wire:model="name" name="company_name" id="" value={{ $oe_companies['company_name'] }}>
    <br>
    @error('name')
    <span> {{$message}}</span> @enderror
    </br>
    <input class="buttonClear"  x-data x-on:click="$dispatch('close-modal')" wire:loading.attr="disabled" wire:loading.remove type="button" class="oe-button" value="Cancel" style="margin-left: 368px ; margin-top: 10px">
    <input wire:loading.attr="disabled" wire:loading.remove type="submit" class="buttonAdd" value="Save">
</form>
</div>
