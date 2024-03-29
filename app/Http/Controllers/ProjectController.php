<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectModel;
use App\Models\CompanyModel;
use App\Models\TagModel;

class ProjectController extends Controller
{
    //
    public function insertProject(Request $request){
        $company_data = CompanyModel::all();
        $tag_data = TagModel::all();
        return view('insert_project',['oe_companies' => $company_data, 'oe_tags' => $tag_data]);
    }
    public function insertProjectProcess(Request $request){
        $project = new ProjectModel();
        $project->project_name = request('project_name');
        $project->save();
        return view('success');
    }
}
