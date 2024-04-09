<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\TagModel;
use App\Models\ProjectTagModel;

class TagAction extends Component
{
    public TagModel $tag;
    public function mount(TagModel $tag){
        $this->tag = $tag;
    }
    public function render()
    {
        $tag_projects = ProjectTagModel::all();
        return view('livewire.tag-action',[
            'oe_tags' => $this->tag,
            'tag_projects' => $tag_projects,
        ]);

    }
}
