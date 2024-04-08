<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AdvisorModel;
use App\Models\ProjectTagModel;
use App\Models\TagModel;
use App\Models\UserModel;
use App\Models\UserProjectModel;


class ProjectViewBox extends Component
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
        return view('livewire.project-view-box',[
            'project' => $this->project,
            'users' => $users,
            'user_proj' => $user_proj,
            'tags' => $tags,
            'proj_tag' => $proj_tag,
            'advisors' => $advisors
        ]);
    }
}

