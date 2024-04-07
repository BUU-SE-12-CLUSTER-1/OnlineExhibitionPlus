<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\TagModel;
use Illuminate\Http\Request;
class TagList extends Component
{
    public $search = '';
    public function render()
    {
        $search = $this->search ? $this->search :"";
        $tags = TagModel::where('tag_name','like',"%{$search}%")->paginate(10);
        return view('livewire.tag-list',[
            'oe_tags' => $tags
        ]);
    }
}
