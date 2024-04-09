<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\TagModel;
use Illuminate\Http\Request;

class InsertTag extends Component
{
    public $name = '';
    public function insertTag(){
        $this->validate([
            'name' => 'required|min:2|max:40|unique:oe_tags,tag_name'
        ]);
    TagModel::create([
        'tag_name' => $this->name
    ]);
        $this->reset();
        $this->dispatch('close-modal');
    }
    public function render()
    {
        return view('livewire.insert-tag');
    }
}
