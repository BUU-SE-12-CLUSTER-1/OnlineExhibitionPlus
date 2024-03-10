<?php

namespace App\Http\Controllers;

use App\Models\MajorModel;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    //
    public function insertMajor(Request $request){
        $major = new MajorModel();
        $major->major_name = request('major_name');
        $major->save();
        return view('success');
    }
}
