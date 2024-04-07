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
}
