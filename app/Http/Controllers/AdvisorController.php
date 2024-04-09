<?php

namespace App\Http\Controllers;

use App\Models\AdvisorModel;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class AdvisorController extends Controller
{
    //
    public function insertAdvisor(Request $request){
        $advisor = new AdvisorModel();
        // dd($request->all());
        $advisor->advisor_title = request('advisor_title');
        $advisor->advisor_fname = request('advisor_fname');
        $advisor->advisor_lname = request('advisor_lname');
        $advisor->save();
        return redirect('/advisor-list');

    }
    public function showAdvisorList(){
        $advisor_data = AdvisorModel::paginate(5);
        return view('advisor_list',['oe_advisors'=>$advisor_data]);
    }
    public function deleteAdvisor($advisor_id){
        $advisor_projects = ProjectModel::all();
        foreach($advisor_projects as $advisor_project){
            if($advisor_project->proj_advisor_id == $advisor_id){
                $advisor_project->proj_advisor_id = 1;
            }
        }
        $advisor = AdvisorModel::find($advisor_id);
        $advisor->delete();
        return back();
    }
    public function editAdvisor($advisor_id){
        $advisor = AdvisorModel::find($advisor_id);
        return view('edit_advisor',['oe_advisors'=>$advisor]);
    }
    public function updateAdvisor($advisor_id){
        $advisor = AdvisorModel::find($advisor_id);
        $advisor->advisor_title = request('advisor_title');
        $advisor->advisor_fname = request('advisor_fname');
        $advisor->advisor_lname = request('advisor_lname');
        $advisor->save();
        return redirect('/advisor-list');
    }
}
