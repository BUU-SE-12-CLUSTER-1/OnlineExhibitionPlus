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
    public function showCompanyDropdownList(Request $request){
        if(request('company_name') == NULL){
            $company_data = CompanyModel::all();
            return  response()->json(['oe_companies'=>$company_data]);
        }else{
            $company_data = CompanyModel::where('companyname', 'LIKE','%'.$request['company_name'],'%');
            return response()->json(['oe_companies'=>$company_data]);
        }
    }
}
