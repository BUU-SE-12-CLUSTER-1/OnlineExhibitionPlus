<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CompanyModel;
use Illuminate\Http\Request;

class EditCompany extends Component
{
    public $name;
    public CompanyModel $company;

    public function updateCompany(){
        $this->validate([
            'name' => 'required|min:2|max:100|unique:oe_companies,company_name,'.$this->company->company_id.',company_id'
        ]);
        $this->company->company_name = $this->name;
        $this->company->save();
        $this->dispatch('close-modal');
    }

    public function mount(CompanyModel $company){
        $this->company = $company;
        $this->name = $company->company_name;
    }
    public function render()
    {
        return view('livewire.edit-company',['oe_companies'=> $this->company]);
    }
}
