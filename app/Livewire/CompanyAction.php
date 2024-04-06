<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CompanyModel;

class CompanyAction extends Component
{
    public CompanyModel $company;
    public function mount(CompanyModel $company){
        $this->company = $company;
    }
    public function render()
    {
        return view('livewire.company-action',['oe_companies'=> $this->company]);
    }
}
