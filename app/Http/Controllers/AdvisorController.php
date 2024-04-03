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
        $advisor->advisor_fname = request('advisor_fname');
        $advisor->advisor_lname = request('advisor_lname');
        $advisor->save();
        return view('success');

    }
    public function showAdvisorList(){
        $advisor_data = AdvisorModel::all();
       return view('advisor_list',['oe_advisors'=>$advisor_data]);

    }
}
