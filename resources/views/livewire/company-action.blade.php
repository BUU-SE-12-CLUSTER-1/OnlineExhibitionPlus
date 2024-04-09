<div>
    <div style="margin-left: 30px">
        <?php $isHasProject = false ?>
        @foreach ($company_projects as $company_project)
        @if($company_project->proj_company_id == $company->company_id)
        <?php $isHasProject = true ?>
        @endif
        @endforeach
        @if(!$isHasProject)
    <a href="#" x-data x-on:click="$dispatch('open-oe-alert', { name: 'delete-{{ $company->company_id }}' })"><i class="fa-solid fa-trash-can"></i></a>&nbsp;&nbsp;
    @endif
    <a href="#" x-data x-on:click="$dispatch('open-modal', { name: '{{ $company->company_id }}' })"><i class="fa-solid fa-pen-to-square"></i></a></div>
    <x-modal name="{{ $company->company_id }}" title="Edit Company" id="edit-box">
        <x-slot name="body">
            @livewire('edit-company', ['company' => $company])
        </x-slot>
    </x-modal>
    <x-oe-alert name="delete-{{ $company->company_id }}">
        <x-slot:body>
        @livewire('delete-alert', ['topic'=>'company', 'model' => $company])
        </x-slot>
      </x-oe-alert>
</div>
