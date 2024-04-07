<?php

namespace App\Livewire;

use Livewire\Component;

class DeleteAlert extends Component
{
    public $topic;
    public $model;
    public function mount($topic, $model){
        $this->topic=$topic;
        $this->model=$model;
    }
    public function render()
    {
        return view('livewire.delete-alert',['model'=>$this->model]);
    }
}
