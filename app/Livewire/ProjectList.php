<?php

namespace App\Livewire;
use App\Models\UserLikedProjectModel;
use Livewire\Component;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class ProjectList extends Component
{
    public $search = "";
      public function render()
    {
        $search = $this->search ? $this->search :"";
        $projects = ProjectModel::where('proj_name','like',"%{$search}%")->paginate(16);
        $user_liked_project = UserLikedProjectModel::all();
        return view('livewire.project-list',[
            'oe_projects' => $projects
]);
    }
}
