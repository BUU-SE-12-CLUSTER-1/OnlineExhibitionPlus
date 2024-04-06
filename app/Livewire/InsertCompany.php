<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CompanyModel;
use Illuminate\Http\Request;

class InsertCompany extends Component
{
    public $name = '';
    public function insertCompany(){
        $this->validate([
            'name' => 'required|min:2|max:100'
        ]);
        CompanyModel::create([
            'company_name' => $this->name
        ]);
        $this->reset();
        $this->dispatch('close-modal');
    }
    public function render()
    {
        return view('livewire.insert-company');
    }
}
