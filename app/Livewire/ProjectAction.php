<?php

namespace App\Livewire;
use App\Models\UserLikedProjectModel;
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
        $user_liked_project = UserLikedProjectModel::all();
        return view('livewire.project-action',[
            'oe_projects' => $this->project,
            'oe_user_liked_project' => $user_liked_project
        ]);

    }
}
