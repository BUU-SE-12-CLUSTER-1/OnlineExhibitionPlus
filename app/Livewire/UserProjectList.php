<?php

namespace App\Livewire;
use App\Models\UserLikedProjectModel;
use Livewire\Component;
use App\Models\ProjectModel;
use Illuminate\Http\Request;
use App\Models\UserProjectModel;
class UserProjectList extends Component
{
    public $user_id;
    public function mount($user_id){
        $this->user_id = $user_id;
    }
      public function render()
    {
        /*
        $user_projects = UserProjectModel::all();
        $user_project_ids = array();
        foreach ($user_projects as $user_project){
            if($user_project->userproj_user_id == $this->user_id){
                array_push($user_project_ids,$user_project->userproj_proj_id);
            }
        }
        $projects = ProjectModel::whereIn('proj_id',$user_project_ids)->paginate(6);
        return view('livewire.user-project-list',[
            'oe_projects' => $projects
    ]);
*/      $projects = ProjectModel::paginate(12);
        return view('livewire.user-project-list',[
        'oe_projects' => $projects
        ]);

    }
}
