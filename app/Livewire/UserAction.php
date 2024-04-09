<?php

namespace App\Livewire;

use App\Models\UserProjectModel;
use Livewire\Component;
use App\Models\UserModel;
use App\Models\RoleModel;
use App\Models\MajorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UserAction extends Component
{
    public UserModel $user;
    public function mount(UserModel $user){
        $this->user = $user;
    }
    public function render()
    {
        $user_projects = UserProjectModel::all();
        return view('livewire.user-action',[
            'user' => $this->user,
            'user_projects' => $user_projects,
        ]);
    }
}
