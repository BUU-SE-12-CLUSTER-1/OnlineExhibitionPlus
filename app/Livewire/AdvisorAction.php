<?php

namespace App\Livewire;

use App\Models\AdvisorModel;
use App\Models\ProjectModel;
use Livewire\Component;

class AdvisorAction extends Component
{

    public AdvisorModel $advisor;
    public function mount(AdvisorModel $advisor){
        $this->advisor = $advisor;
    }
    public function render()
    {   $advisor_projects = ProjectModel::all();
        return view('livewire.advisor-action',
        [
            'oe_advisors' => $this->advisor,
            'advisor_projects' => $advisor_projects,
        ]);
    }
}
