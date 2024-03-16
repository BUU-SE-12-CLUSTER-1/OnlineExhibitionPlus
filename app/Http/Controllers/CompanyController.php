<?php

namespace App\Http\Controllers;

use App\Models\CompanyModel;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function insertCompany(Request $request){
        $company = new CompanyModel();
        $company->company_name = request('company_name');
        $company->save();
        return view('success');
    }
    public function showCompanyList(){
        $company_data = CompanyModel::all();
        return view('company_list',['oe_companies'=>$company_data]);
    }
}
