<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\TagModel;

class TagAction extends Component
{
    public TagModel $tag;

    public function mount(TagModel $tag){
        $this->tag = $tag;
    }
    public function render()
    {
        return view('livewire.tag-action',[
            'oe_tags' => $this->tag
        ]);

    }
}
