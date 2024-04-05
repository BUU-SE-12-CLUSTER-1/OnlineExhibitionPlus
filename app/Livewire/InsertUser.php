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

class InsertUser extends Component
{
    public $student_id = '';
    public $fname = '';
    public $lname = '';
    public $email = '';
    public $password = '';
    public $profile_image = '/assets/img/users/img_user_icon.png';
    public $role_id = '';
    public $major_id = '';
    public $search;

    public function insertUser(){
        $this->validate([
           'student_id' =>'required|min:8|max:8|unique:oe_users,user_student_id',
            'fname' =>'required|min:2|max:25',
            'lname' =>'required|min:2|max:25',
            'email' =>'required|email|unique:oe_users,user_email',
            'role_id' => 'required',
            'major_id' => 'required'

        ]);
        UserModel::create([
            'user_student_id' => $this->student_id,
            'user_fname' => $this->fname,
            'user_lname' => $this->lname,
            'user_email' => $this->email,
            'user_password' => Hash::make($this->password),
            'user_profile_image' => $this->profile_image,
            'user_role_id' => $this->role_id,
            'user_major_id' => $this->major_id,
        ]);
        $this->student_id = "";
        $this->reset();
        request()->session()->flash('success','User Added Successfully');
        $this->dispatch('close-modal');

    }
    public function mount(){
    }
    public function render()
    {
        $users = UserModel::all();
        $major_data = MajorModel::query()->orderBy('major_id','ASC')->get();
        $role_data = RoleModel::all();
        return view('livewire.insert-user',[
            'oe_users' => $users,
            'oe_roles' => $role_data,
            'oe_majors' => $major_data
        ]);
    }
}
