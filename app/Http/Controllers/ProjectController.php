<?php

namespace App\Http\Controllers;

use App\Models\ProjectTagModel;
use App\Models\UserProjectModel;
use Illuminate\Http\Request;
use App\Models\ProjectModel;
use App\Models\CompanyModel;
use App\Models\AdvisorModel;
use App\Models\TagModel;
use App\Models\UserModel;
use App\Models\UserLikedProjectModel;
class ProjectController extends Controller
{
    //
    public function insertProject(Request $request){
        $user_data = UserModel::all();
        $company_data = CompanyModel::all();
        $tag_data = TagModel::all();
        $advisor_data = AdvisorModel::all();
        return view('insert_project',['oe_users' => $user_data,'oe_companies' => $company_data, 'oe_tags' => $tag_data, 'oe_advisors' => $advisor_data]);
    }
    public function insertProjectProcess(){
        $project = new ProjectModel();
        $project->project_name = request('project_name');
        $project->save();
        return view('success');
    }

    public function showProjectList(){
        $project_data = ProjectModel::all();
        return view('project_list',['oe_projects' => $project_data]);
    }
    public function searchProject(Request $request){
        $search_data = request('search_project');
        $project_data = ProjectModel::where('proj_name','LIKE','%'.$search_data.'%');
        if(!$project_data || !$project_data->count() ||$search_data == ''){
            return redirect('/');
    }else{
    return view('search_project_list',['oe_projects'=> $project_data]);
}
}
    public function deleteProject($proj_id){
        $project = ProjectModel::find($proj_id);
        $project_tags = ProjectTagModel::all();
        foreach($project_tags as $project_tag){
            if($project_tag->projtag_proj_id == $proj_id){
            $project_tag->delete();
        }
        }
        $project_users = UserProjectModel::all();
        foreach($project_users as $project_user){
            if($project_user->userproj_proj_id == $proj_id){
            $project_user->delete();
        }
        }
        $project->delete();

        return back();
    }

    public function toggleVisible($proj_id){
        $project = ProjectModel::find($proj_id);
        $status = $project->proj_status;
        if($status == 0){
            $project->proj_status = 1;
        }else{
            $project->proj_status = 0;
        }
        $project->save();
        return back();
    }

    public function favProjectList(){
        $project_data = ProjectModel::all();
        return view('/fav_project_list',['oe_projects' => $project_data]);
    }

    public function toggleLikedProject($proj_id, $user_id){
        $isLiked = false;
        $liked_data = UserLikedProjectModel::all();
        foreach ($liked_data as $liked){
            if($liked->ulp_proj_id == $proj_id && $liked->ulp_user_id == $user_id){
                $liked->delete();
                $isLiked = true;
            }
        }
        if($isLiked == false){
            $liked = new UserLikedProjectModel();
            $liked->ulp_proj_id = $proj_id;
            $liked->ulp_user_id = $user_id;
            $liked->save();
        }
        return back();

    }


}
