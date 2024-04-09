<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CommentModel;
use App\Models\UserModel;

class CommentList extends Component
{
    public $project_id;
    public function mount($project_id){
        $this-> project_id = $project_id;
    }
    public function render()
    {
        $proj_id = $this->project_id;
        $comments = CommentModel::all();
        $users = UserModel::all();
        return view('livewire.comment-list',['comments' => $comments,'users' => $users]);
    }
}
