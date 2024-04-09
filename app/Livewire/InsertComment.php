<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CommentModel;

class InsertComment extends Component
{
    public $text='' ;
    public $project_id='';
    public $user_id='';
    public function mount($user_id, $project_id){

    }
    public function insertComment(){
        $this->validate([
            'text'=>'required',
        ]);
        CommentModel::create([
            'comment_text'=>$this->text,
            'comment_proj_id'=>$this->project_id,
            'comment_user_id'=>$this->user_id,
        ]);
        $this->text = '';

    }
    public function render()
    {
        return view('livewire.insert-comment');
    }
}
