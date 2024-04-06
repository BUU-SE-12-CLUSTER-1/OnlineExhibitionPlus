<div>
    <a href="#" x-data x-on:click="$dispatch('open-modal', { name: '{{ $company->company_id }}' })">Edit</a>
    <a href="{{ url('/delete-company/' . $company->company_id) }}"><i class="fa-solid fa-trash-can"></i></a>

    <x-modal name="{{ $company->company_id }}" title="Edit Company" id="edit-box">
        <x-slot name="body">
            @livewire('edit-company', ['company' => $company])
        </x-slot>
    </x-modal>
</div>
