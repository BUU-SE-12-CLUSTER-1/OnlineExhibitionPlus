<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class ProjectList extends Component
{
      public function render()
    {
        $projects = ProjectModel::paginate(10);
        return view('livewire.project-list',[
            'oe_projects' => $projects
]);
    }
}
