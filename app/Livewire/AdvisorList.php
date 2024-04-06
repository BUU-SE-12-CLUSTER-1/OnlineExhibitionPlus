<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AdvisorModel;
use Illuminate\Http\Request;


class AdvisorList extends Component
{
    
    public function render()
    {
        $advisors = AdvisorModel::paginate(10);
        return view('livewire.advisor-list',[
            'oe_advisors'=> $advisors
        ]);
    }
}
