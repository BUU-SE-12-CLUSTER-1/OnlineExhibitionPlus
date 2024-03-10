<?php

namespace App\Http\Controllers;

use App\Models\AdvisorsModel;
use Illuminate\Http\Request;

class AdvisorsController extends Controller
{
    //
    public function insertAdvisors(Request $request){
        $advisors = new AdvisorsModel();
        // dd($request->all());
        $advisors->advisor_fname = request('advisors_fname');
        $advisors->advisor_lname = request('advisors_lname');
        $advisors->save();
        return view('success');

    }
}
