<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\TagModel;
use Illuminate\Http\Request;
class TagList extends Component
{
    public function render()
    {
        $tags = TagModel::paginate(10);
        return view('livewire.tag-list',[
            'oe_tags' => $tags
        ]);
    }
}
