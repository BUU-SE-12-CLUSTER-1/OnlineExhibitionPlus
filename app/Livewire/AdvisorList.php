<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AdvisorModel;
use Illuminate\Http\Request;


class AdvisorList extends Component

{
    public $search = '';
    
    public function render()
    {
        $search = $this->search ? $this->search :"";
        
   
        $advisors = AdvisorModel::where('advisor_title','like',"%{$search}%")->orWhere('advisor_fname','like',"%{$search}%")->orWhere('advisor_lname','like',"%{$search}%")->paginate(10);
        return view('livewire.advisor-list',[
            'oe_advisors'=> $advisors
        ]);
    }
}
