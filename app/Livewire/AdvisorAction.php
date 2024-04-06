<?php

namespace App\Livewire;

use App\Models\AdvisorModel;
use Livewire\Component;
use App\Models\UserModel;
class AdvisorAction extends Component
{
    
    public AdvisorModel $advisor;
    public function mount(AdvisorModel $advisor){
        $this->user = $advisor;
    }
    public function render()
    {
        return view('livewire.advisor-action',[
            'oe_advisors' => $this->advisor
        ]);
    }
}
