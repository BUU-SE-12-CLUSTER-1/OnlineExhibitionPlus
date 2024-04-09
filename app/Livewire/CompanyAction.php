<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CompanyModel;
use App\Models\ProjectModel;

class CompanyAction extends Component
{
    public CompanyModel $company;
    public function mount(CompanyModel $company){
        $this->company = $company;
    }
    public function render()
    {
        $company_projects = ProjectModel::all();
        return view('livewire.company-action',['oe_companies'=> $this->company,
    'company_projects' => $company_projects]);
    }
}
