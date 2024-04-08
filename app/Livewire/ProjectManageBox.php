<?php

namespace App\Livewire;

use App\Models\AdvisorModel;
use App\Models\ProjectTagModel;
use App\Models\TagModel;
use App\Models\UserModel;
use App\Models\UserProjectModel;
use Livewire\Component;

class ProjectManageBox extends Component
{
    public $project;
    public function mount($project){
        $this->project = $project;
    }
    public function render()
    {   $users = UserModel::all();
        $user_proj = UserProjectModel::all();
        $tags = TagModel::all();
        $proj_tag = ProjectTagModel::all();
        $advisors = AdvisorModel::all();
        return view('livewire.project-manage-box',[
            'project' => $this->project,
            'users' => $users,
            'user_proj' => $user_proj,
            'tags' => $tags,
            'proj_tag' => $proj_tag,
            'advisors' => $advisors
        ]);
    }
}
