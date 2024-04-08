<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectModel;
use App\Models\CompanyModel;
use App\Models\AdvisorModel;
use App\Models\TagModel;
use App\Models\UserModel;

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
    public function insertProjectProcess(Request $request){
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
        $search_data = $request->input('search_project');
        $project_data = ProjectModel::where('proj_name','LIKE','%'.$search_data.'%')
        ->paginate(10);
        if(!$project_data || !$project_data->count()){
            return redirect('/');
    }
    return view('search_project_list',['oe_projects'=> $project_data]);
}
    public function deleteProject($proj_id){
        $project = ProjectModel::find($proj_id);
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
}
