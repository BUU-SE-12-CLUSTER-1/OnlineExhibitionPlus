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
use App\Models\RoleModel;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class UserController extends Controller
{
    public function importExcel(){
        return view('import_excel');
    }
    public function saveImportedExcel(Request $request){
        $file = $request->file('file')->store('import');
        //dd($file);
        //Excel::import(new UsersImport, $request->file);
        $import = new UsersImport;
        $import->import($file);
        return redirect('/user-list');
        //return back()->withStatus('successfully');
    }
    public function insertUserPage(){
        $major_data = MajorModel::query()->orderBy('major_id','ASC')->get();
        $role_data = RoleModel::all();
        return view('insert_user',['oe_majors'=>$major_data,'oe_roles'=>$role_data]);
    }
    public function insertUser(Request $request){
        $user = new UserModel();
        $user->user_student_id = request('user_student_id');
        $user->user_fname = request('user_fname');
        $user->user_lname = request('user_lname');
        $user->user_email = request('user_email');
        $user->user_password = Hash::make(request('user_password'));
        $user->user_role_id = (int)$request->input('user_role_id');
        $path = public_path('/assets/img/users/img_user_icon.png');
        //$image = File::get($path);
        //$base64 = base64_encode($image);
        $user->user_profile_image = '/assets/img/users/img_user_icon.png';
        $user->user_major_id = (int)$request->input('user_major_id');
        $user->save();
        return redirect('user-list');
    }
    public function showUserList(){
        $user_data = UserModel::paginate(10);
        $major_data = MajorModel::all();
        $role_data = RoleModel::all();
        return view('user_list',['oe_users'=>$user_data, 'oe_majors'=>$major_data, 'oe_roles'=>$role_data]);
    }
    public function deleteUser($user_id){
        $user = UserModel::find($user_id);
        $user->delete();
        return Redirect::back();
    }
    public function editUser($user_id){
        $user_data = UserModel::find($user_id);
        $major_data = MajorModel::all();
        $role_data = RoleModel::all();
        return view('edit_user',['oe_users'=>$user_data, 'oe_majors'=>$major_data, 'oe_roles'=>$role_data]);
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
        $user->user_role_id = (int)$request->input('user_role_id');
        $user->user_major_id = (int)$request->input('user_major_id');
        $user->save();
        return redirect('/user-list');
    }
    public function searchUser(Request $request){
        $major_data = MajorModel::all();
        $role_data = RoleModel::all();
        $search_data = $request->input('search_user');
        $user_data = UserModel::where('user_student_id','LIKE','%'.$search_data.'%')
        ->orWhere('user_fname','LIKE','%'.$search_data.'%')
        ->orWhere('user_lname','LIKE','%'.$search_data.'%')
        ->paginate(10);
        if(!$user_data || !$user_data->count()){
            return redirect('/user-list');
        }

        return view('user_list',['oe_users'=>$user_data, 'oe_majors'=>$major_data, 'oe_roles'=>$role_data]);
    }
    public function showUserProfile($user_id){
        $user_data = UserModel::find($user_id);
        $major_data = MajorModel::all();
        $role_data = RoleModel::all();
        return view('user_profile2',['oe_users'=>$user_data, 'oe_majors'=>$major_data, 'oe_roles'=>$role_data]);
    }
    public function getUserImage($user_id){
        $user_data = UserModel::find($user_id);
        $user_image = $user_data->user_profile_image;
        $response = Response::make($user_image);
        $response->header('Content-Type', 'image/jpeg');
        $response->headers('Cache-Control','max-age=2592000');
        return $response;
    }
    /*
    public function updateUserDetail($user_id, $Detail_name, Request $request){
        $user = UserModel::find($user_id);
        if($Detail_name == "fname"){
            $user->user_fname = request('user_fname');
        }elseif($Detail_name == 'lname'){
            $user->user_lname = request('user_lname');
        }elseif($Detail_name == 'student-id'){
            $user->user_student_id = request('user_student_id');
        }elseif($Detail_name == 'major'){
            $user->user_major_id = (int)$request->input('user_major_id');
        }elseif($Detail_name == 'email'){
            $user->user_email = request('user_email');
        }elseif($Detail_name == 'phone'){
            $user->user_phone = request('user_phone');
        }
        $user->save();
        return redirect('/user-profile/'.$user_id);
    }
    */
    public function updateUserDetail($user_id, Request $request){
        $user = UserModel::find($user_id);
        /*
        $image = $request->file("upload_image")->getRealPath();
        $img_content = file_get_contents($image);
        $base64 = base64_encode($img_content);
        $user->user_profile_image = $base64;
        if(isset($_FILES["upload-image"])&&$_FILES["upload-image"]["error"]== 0 ){
            $image = $_FILES["upload-image"]["tmp_name"];
            //$image = $request->file("upload-image")->getRealPath();
            $img_content = file_get_contents($image);
            $base64 = base64_encode($img_content);
            $user->user_profile_image = $base64;
            $user->save();
            $_SESSION["success"] = "Image uploaded successfully";
        }else{
            $_SESSION["error"] = "Please select an image file to upload.";
        }
        */
        if( $request->hasFile('upload-image')){
            $image = $request->file('upload-image');
            $path = public_path(). '/users/img/';
            $filename = time().'.'.$user_id.'.'.$image->getClientOriginalExtension();
            $image->move($path,$filename);
            $user->user_profile_image = '/users/img/'.$filename;
        }
        $user->user_fname = request('user_fname');
        $user->user_lname = request('user_lname');
        $user->user_student_id = request('user_student_id');
        $user->user_major_id = (int)$request->input('user_major_id');
        $user->user_email = request('user_email');
        $user->user_phone = request('user_phone');
        $user->save();
        return redirect('/user-profile/'.$user_id);
    }
    public function uploadImage($user_id){
        $user_data = UserModel::find($user_id);
        return view('upload_user_image',['oe_users'=>$user_data]);
    }
    public function uploadImageProcess($user_id,Request $request){
        $user = UserModel::find($user_id);
        if(isset($_FILES["upload-image"])&&$_FILES["upload-image"]["error"]== 0 ){
            $image = $_FILES["upload-image"]["tmp_name"];
            //$image = $request->file("upload-image")->getRealPath();
            $img_content = file_get_contents($image);
            $base64 = base64_encode($img_content);
            $user->user_profile_image = $base64;
            $user->save();
            $_SESSION["success"] = "Image uploaded successfully";
        }else{
            $_SESSION["error"] = "Please select an image file to upload.";
        }
        return redirect('/user-profile/'.$user->user_id);
        //return back();

    }
}
