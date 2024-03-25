<?php

namespace App\Http\Controllers;

use App\Models\AdvisorModel;
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
        return back();

    }
    public function showAdvisorList(){
        $advisor_data = AdvisorModel::paginate(5);
        return view('advisor_list',['oe_advisors'=>$advisor_data]);
    }
    public function deleteAdvisor($advisor_id){
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
