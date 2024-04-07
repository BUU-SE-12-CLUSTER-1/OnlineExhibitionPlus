<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserModel;
use App\Models\RoleModel;
use App\Models\MajorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UserList extends Component
{
    use WithPagination;
    public $search = '';
    public function mount(){
        //$this->search = $search;
    }

    public function render()
    {
        $search = $this->search ? $this->search :"";
        $users = UserModel::where('user_student_id','like',"%{$search}%")->orWhere('user_fname','like',"%{$search}%")->orWhere('user_lname','like',"%{$search}%")->paginate(10);
        return view('livewire.user-list',[
            'oe_users' => $users,
        ]);
    }
}
