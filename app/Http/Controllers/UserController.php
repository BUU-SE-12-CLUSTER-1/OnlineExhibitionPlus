<?php

namespace App\Http\Controllers;

use App\Models\MajorModel;
use App\Models\UserProjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Models\RoleModel;
use App\Models\ProjectModel;
use App\Models\ProjectTagModel;
use App\Models\TagModel;
use App\Models\AdvisorModel;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\UserLikedProjectModel;
use App\Models\CommentModel;
class UserController extends Controller
{
    public function importExcel(){
        return view('import_excel');
    }
    public function saveImportedExcel(Request $request){
        $file = $request->file('file')->store('import');
        $import = new UsersImport;
        $import->import($file);
        return redirect('/user-list');
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
        $project_data = ProjectModel::all();
        $user_projects = UserProjectModel::all();
        $tags = TagModel::all();
        $proj_tag = ProjectTagModel::all();
        $advisors = AdvisorModel::all();
        return view('edit_user',[
            'oe_users'=>$user_data,
            'oe_majors'=>$major_data,
             'oe_roles'=>$role_data ,
              'oe_projects'=>$project_data,
               'oe_user_projects'=>$user_projects,
            'oe_tags'=>$tags,
            'oe_project_tag'=>$proj_tag,
            'oe_advisors'=>$advisors]);
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
        $users = UserModel::all();
        $major_data = MajorModel::all();
        $role_data = RoleModel::all();
        $tags = TagModel::all();
        $proj_tag = ProjectTagModel::all();
        $advisors = AdvisorModel::all();
        $user_projects = UserProjectModel::all();
        $user_project_ids = array();
        foreach ($user_projects as $user_project){
            if($user_project->userproj_user_id == $user_id){
                array_push($user_project_ids,$user_project->userproj_proj_id);
            }
        }
        $project_data = ProjectModel::whereIn('proj_id',$user_project_ids)->paginate(6);

        return view('user_profile2',['user'=>$user_data, 'oe_users'=>$users, 'oe_majors'=>$major_data, 'oe_roles'=>$role_data
     , 'oe_projects'=>$project_data, 'oe_user_projects'=>$user_projects, 'oe_tags'=>$tags, 'oe_project_tag'=>$proj_tag, 'oe_advisors'=>$advisors]);
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
        $request->validate([
            'student_id' =>'required|min:8|max:8|unique:oe_users,user_student_id,'.$user_id.',user_id',
            'first_name' =>'required|min:2|max:25',
            'last_name' =>'required|min:2|max:25',
            'email' =>'required|email|unique:oe_users,user_email,'.$user_id.',user_id',
            'major' => 'required',
            'phone_number' => 'nullable|regex:/(0)[0-9]{9}/'
        ]);
        $user = UserModel::find($user_id);
        if( $request->hasFile('upload-image')){
            $image = $request->file('upload-image');
            $path = public_path(). '/users/img/';
            $filename = time().'.'.$user_id.'.'.$image->getClientOriginalExtension();
            $image->move($path,$filename);
            $user->user_profile_image = '/users/img/'.$filename;
        }
        $user->user_fname = request('first_name');
        $user->user_lname = request('last_name');
        $user->user_student_id = request('student_id');
        $user->user_major_id = (int)$request->input('major');
        $user->user_email = request('email');
        $user->user_phone = request('phone_number');
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
    public function toggleVisible($user_id){
        $user = UserModel::find($user_id);
        $status = $user->user_status;
        if($status == 0){
            $user->user_status = 1;
        }else{
            $user->user_status = 0;
        }
        $user->save();
        return back();
    }
    public function changePassword($user_id,Request $request){
        $request->validate([
            'password' => 'min:6|required_with:password_confirmation',
            'password_confirmation' => 'min:6|same:password',
        ]);
        return back();
    }
}
