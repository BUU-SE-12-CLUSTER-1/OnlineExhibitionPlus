<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\ProjectModel;
use Illuminate\Http\Request;
class ProjectAction extends Component
{
    public ProjectModel $project;
    public function mount(ProjectModel $project){
        $this->project = $project;
    }
    public function render()
    {
        return view('livewire.project-action',[
            'oe_projects' => $this->project
        ]);

    }
}
