<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\CompanyModel;
use Illuminate\Http\Request;

class CompanyList extends Component
{
    public $search='';
    public function render()
    {
        $search = $this->search ? $this->search :"";
        $company_data = CompanyModel::where('company_name','like',"%{$search}%")->paginate(10);
        return view('livewire.company-list',['oe_companies'=>$company_data]);
    }
}
