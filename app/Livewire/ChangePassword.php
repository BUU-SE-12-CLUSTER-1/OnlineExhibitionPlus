<?php

namespace App\Livewire;

use Livewire\Component;

class ChangePassword extends Component
{
    public $user_id;
    public function render()
    {
        return view('livewire.change-password',['user_id' => $this->user_id]);
    }
}
