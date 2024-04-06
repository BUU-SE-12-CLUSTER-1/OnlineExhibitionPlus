<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AdvisorModel;
use Illuminate\Http\Request;


class InsertAdvisor extends Component
{
    public $title='' ;
    public $first_name='';
    public $last_name='';
    public function InsertAdvisor(){
        $this->validate([
            'title'=>'required|min:2|max:45',
            'first_name'=>'required|min:2|max:25',
            'last_name'=>'required|min:2|max:25',
        ]);
        AdvisorModel::create([
            'advisor_title'=>$this->title,
            'advisor_fname'=>$this->first_name,
            'advisor_lname'=>$this->last_name,
        ]);
        $this->reset();
        $this->dispatch('close-modal');
    }
    
    public function render()
    {
        return view('livewire.insert-advisor');
    }
}
