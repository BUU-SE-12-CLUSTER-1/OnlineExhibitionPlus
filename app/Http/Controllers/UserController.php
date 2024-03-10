<?php

namespace App\Http\Controllers;

use App\Models\MajorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;

class UserController extends Controller
{
    public function importExcel(){
        return view('import_excel');
    }
    public function saveImportedExcel(Request $request){
        $file = $request->file('file');
        //dd($file);
        //Excel::import(new UsersImport, $request->file);
        (new UsersImport)->import($file);
        return redirect('/user-list');
    }
    public function insertUser(Request $request){
        $user = new UserModel();
        $user->user_student_id = request('user_student_id');
        $user->user_fname = request('user_fname');
        $user->user_lname = request('user_lname');
        $user->user_email = request('user_email');
        $user->user_password = Hash::make(request('user_password'));
        $user->user_role_id = (int)$request->input('user_role');
        $user->user_profile_image = "test";
        $user->user_major_id = (int)$request->input('user_major_id');
        $user->save();
        return redirect('user-list');
    }
    public function showUserList(){
        $user_data = UserModel::paginate(5);
        $major_data = MajorModel::all();
        return view('user_list',['oe_users'=>$user_data, 'oe_majors'=>$major_data]);
    }
    public function deleteUser($user_id){
        $user = UserModel::find($user_id);
        $user->delete();
        return Redirect::back();
    }
    public function editUser($user_id){
        $user_data = UserModel::find($user_id);
        $major_data = MajorModel::all();
        return view('edit_user',['oe_users'=>$user_data, 'oe_majors'=>$major_data]);
    }
    public function updateUser(Request $request){
        $user = UserModel::find(request('user_id'));
        $user->user_student_id = request('user_student_id');
        $user->user_fname = request('user_fname');
        $user->user_lname = request('user_lname');
        $user->user_email = request('user_email');
        $password = request('password');
        if($password!= null){
            $user->user_password = Hash::make(request('user_password'));
        }
        $user->user_role_id = (int)$request->input('user_role');
        $user->user_profile_image = "test";
        $user->user_major_id = (int)$request->input('user_major_id');
        $user->save();
        return redirect('/user-list');
    }
    public function searchUser(Request $request){
        $search_data = $request->input('search_user');
        $user_data = UserModel::where('user_student_id','LIKE','%'.$search_data.'%')
        ->orWhere('user_fname','LIKE','%'.$search_data.'%')
        ->orWhere('user_lname','LIKE','%'.$search_data.'%')
        ->paginate(5);
        if(!$user_data || !$user_data->count()){
            return redirect('/user-list');
        }
        $major_data = MajorModel::all();
        return view('user_list',['oe_users'=>$user_data, 'oe_majors'=>$major_data]);
    }
}
