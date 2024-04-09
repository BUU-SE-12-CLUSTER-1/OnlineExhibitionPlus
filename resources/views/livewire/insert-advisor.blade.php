<div>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/form_input.css') }}">
    @if (session('success'))

    <span>{{session('success')}}</span>

    @endif
    <form wire:submit="InsertAdvisor">
    @csrf
    <label  class="oe-input-label" for="advisors_title">Title</label>
    <input class="oe-input" type="text"  wire:model="title"  name="advisor_title">
    <br>
    @error('title')
    <span class="oe-error"> {{$message}}</span> @enderror
    </br>
    <label class="oe-input-label" for="advisors_fname">Frist name</label>
    <input class="oe-input" type="text" wire:model="first_name" name="advisor_fname">
    <br>
    @error('first_name')
    <span class="oe-error"> {{$message}}</span> @enderror
    </br>
    <label class="oe-input-label" for="advisors_lname">Last name</label>
    <input class="oe-input" type="text" wire:model="last_name" name="advisor_lname"><br>
    <br>
    @error('last_name')
    <span class="oe-error"> {{$message}}</span> @enderror
    </br>
    <button class="buttonClear" class="buttonClear" x-data x-on:click="$dispatch('close-modal')" type="button" style="margin-left: 368px ; margin-top: 10px">Cancel</button>
    <button class="buttonAdd" type="submit" value="submit">Submit</button>

    </form>


</div>
