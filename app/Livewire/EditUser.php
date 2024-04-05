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
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class EditUser extends Component
{

    public $student_id;
    public $fname;
    public $lname;
    public $email;
    public $password;
    public $role_id;
    public $major_id;
    public $user_id;
    public UserModel $user;

    public function updateUser(){
         $this->user->user_student_id = $this->student_id;
         $this->user->user_fname = $this->fname;
         $this->user->user_lname = $this->lname;
         $this->user->user_email = $this->email;
         $this->user->user_password = Hash::make($this->password);
         $this->user->user_role_id = $this->role_id;
         $this->user->user_major_id = $this->major_id;
         $this->user->save();
         $this->reset(['student_id','fname','lname','email','role_id','major_id']);
        request()->session()->flash('success','User Added Successfully');
        $this->dispatch('close-modal');
    }
    public function mount(UserModel $user){
        $this->user = $user;
        $this->student_id = $user->user_student_id;
        $this->fname = $user->user_fname;
        $this->lname = $user->user_lname;
        $this->email = $user->user_email;
        $this->role_id = $user->user_role_id;
        $this->major_id = $user->user_major_id;
    }
    public function render()
    {
        $major_data = MajorModel::query()->orderBy('major_id','ASC')->get();
        $role_data = RoleModel::all();
        return view('livewire.edit-user',['oe_users' => $this->user,
        'oe_roles' => $role_data,
        'oe_majors' => $major_data]);
    }
}