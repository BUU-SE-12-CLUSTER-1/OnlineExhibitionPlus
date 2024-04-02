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
        $company_data = CompanyModel::paginate(5);
        return view('company_list',['oe_companies'=>$company_data]);
    }
    public function deleteCompany($company_id){
        $company = CompanyModel::find($company_id);
        $company->delete();
        return back();
    }
    public function editCompany($company_id){
        $company=CompanyModel::find($company_id);
        return view('edit_company',['oe_companies'=>$company]);
    }
    public function updateCompany($company_id){
        $company = CompanyModel::find($company_id);
        $company->company_name = request('company_name');
        $company->save();
        return redirect('/company-list');
    }
}
