<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class SearchProjectList extends Component
{
    public $search = "";
    public ProjectModel $projects;
    public function mount(ProjectModel $project){
        $this->projects = $project;
    }
      public function render()
    {
        $search = $this->search ? $this->search :"";
        $projects = $this->projects;
        return view('livewire.search-project-list',[
            'oe_projects' => $projects
]);
    }
}
