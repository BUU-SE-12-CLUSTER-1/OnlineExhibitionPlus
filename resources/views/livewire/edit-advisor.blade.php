<div >
@livewireStyles
    <link rel="stylesheet" href="{{ asset('assets/css/form_input.css') }}">
    
    <form wire:submit="updateAdvisor">

    @csrf
    <label  class="oe-input-label" for="advisors_title"> Title : </label>
    <input  type="text" class="oe-input" wire:model="title" name="advisor_title" value={{$oe_advisors['advisor_title']}}>
    <br>
    @error('title')
    <span> {{$message}}</span> @enderror
    </br>
    <label class="oe-input-label" for="advisors_fname">First name : </label>
    <input class="oe-input" wire:model="first_name" type="text" name="advisor_fname" id="" value={{$oe_advisors['advisor_fname']}}>
    <br>
    @error('first_name')
    <span> {{$message}}</span> @enderror
    </br>
    <label class="oe-input-label" for="advisors_lname">Last name : </label>
    <input class="oe-input" wire:model="last_name" type="text" name="advisor_lname" id="" value={{$oe_advisors['advisor_lname']}}>
    <br>
    @error('last_name')
    <span> {{$message}}</span> @enderror
    </br>
    <input class="buttonClear"  x-data x-on:click="$dispatch('close-modal')" wire:loading.attr="disabled" wire:loading.remove type="button" class="oe-button" value="Cancel" style="margin-left: 368px ; margin-top: 10px">
    <input wire:loading.attr="disabled" wire:loading.remove type="submit" class="buttonAdd" value="Save">

    </form>

</div>
