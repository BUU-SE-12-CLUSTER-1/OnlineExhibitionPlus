<div>
    <div style="margin-left: 30px">
    <a href="{{ url('/delete-company/' . $company->company_id) }}"><i class="fa-solid fa-trash-can"></i></a>&nbsp;&nbsp;
    <a href="#" x-data x-on:click="$dispatch('open-modal', { name: '{{ $company->company_id }}' })"><i class="fa-solid fa-pen-to-square"></i></a></div>
    <x-modal name="{{ $company->company_id }}" title="Edit Company" id="edit-box">
        <x-slot name="body">
            @livewire('edit-company', ['company' => $company])
        </x-slot>
    </x-modal>
</div>
