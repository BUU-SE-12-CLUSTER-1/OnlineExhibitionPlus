<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\TagModel;
use Illuminate\Http\Request;

class EditTag extends Component
{
    public $name;
    public TagModel $tag;
    public function updateTag(){
        $this->validate([
            'name'=>'required|min:2|max:40'
        ]);

        $this->tag->tag_name = $this->name;
        $this->tag->save();
        $this->dispatch('close-modal');
    }
    public function mount(TagModel $tag){
        $this->tag = $tag;
        $this->name = $tag->tag_name;
    }
    public function render()
    {
        return view('livewire.edit-tag',['oe_tags' => $this->tag]);
    }
}
