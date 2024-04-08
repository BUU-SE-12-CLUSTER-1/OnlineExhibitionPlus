<?php

namespace App\Livewire;
use App\Models\UserLikedProjectModel;
use Livewire\Component;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class FavProjectList extends Component
{
    public $search = "";
      public function render()
    {
        $search = $this->search ? $this->search :"";
        $projects = ProjectModel::where('proj_name','like',"%{$search}%")->paginate(16);
        $user_liked_project = UserLikedProjectModel::all();
        return view('livewire.fav-project-list',[
            'oe_projects' => $projects,
            'oe_user_liked_project' => $user_liked_project,
]);
    }
}
