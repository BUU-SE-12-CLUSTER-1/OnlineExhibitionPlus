<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AdvisorModel;
use Illuminate\Http\Request;

class EditAdvisor extends Component
{
    public $title;
    public $first_name;
    public $last_name;
    public AdvisorModel $advisor;

    public function updateAdvisor(){
        
        $this->validate([
            'title'=>'required|min:2|max:45',
            'first_name'=>'required|min:2|max:25',
            'last_name'=>'required|min:2|max:25',
        ]);

        $this->advisor->advisor_title = $this->title;
        $this->advisor->advisor_fname = $this->first_name;
        $this->advisor->advisor_lname = $this->last_name;
        $this->advisor->save();
        $this->dispatch('close-modal');
        
    }
    public function mount(AdvisorModel $advisor){
        $this->advisor = $advisor;
        $this->title = $advisor->advisor_title;
        $this->first_name = $advisor->advisor_fname;
        $this->last_name = $advisor->advisor_lname;
        
    }
    public function render()
    {
        return view('livewire.edit-advisor',['oe_advisors' => $this->advisor,
        ]);
    }
}
