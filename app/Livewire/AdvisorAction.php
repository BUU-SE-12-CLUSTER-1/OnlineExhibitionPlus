<?php

namespace App\Livewire;

use App\Models\AdvisorModel;
use Livewire\Component;

class AdvisorAction extends Component
{
    
    public AdvisorModel $advisor;
    public function mount(AdvisorModel $advisor){
        $this->advisor = $advisor;
    }
    public function render()
    {
        return view('livewire.advisor-action',
        [
            'oe_advisors' => $this->advisor
        ]);
    }
}
