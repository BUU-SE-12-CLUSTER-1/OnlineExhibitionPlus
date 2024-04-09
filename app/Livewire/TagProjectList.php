<?php

namespace App\Livewire;
use App\Models\UserLikedProjectModel;
use Livewire\Component;
use App\Models\ProjectModel;
use Illuminate\Http\Request;
use App\Models\UserProjectModel;
use App\Models\ProjectTagModel;

class TagProjectList extends Component
{
    public $tag_id;
    public function mount($tag_id){
        $this->tag_id = $tag_id;
    }
      public function render()
    {
        $tag_projects = ProjectTagModel::all();
        $tag_project_ids = array();
        foreach ($tag_projects as $tag_project){
            if($tag_project->projtag_tag_id == $this->tag_id){
                array_push($tag_project_ids,$tag_project->projtag_proj_id);
            }
        }
        $projects = ProjectModel::whereIn('proj_id',$tag_project_ids)->paginate(6);
        return view('livewire.tag-project-list',[
            'oe_projects' => $projects
]);
    }
}
