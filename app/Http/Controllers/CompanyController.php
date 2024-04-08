<?php

namespace App\Http\Controllers;

use App\Models\CompanyModel;
use Illuminate\Http\Request;
use App\Models\ProjectModel;
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
    public function showCompanyList(){
        $company_data = CompanyModel::paginate(5);
        return view('company_list',['oe_companies'=>$company_data]);
    }
    public function deleteCompany($company_id){
        $company_projects = ProjectModel::all();
        foreach($company_projects as $company_project){
            if($company_project->proj_company_id == $company_id){
                $company_project->proj_company_id = 1;
            }
        }
        $company = CompanyModel::find($company_id);
        $company->delete();
        return back();
    }
    public function editCompany($company_id){
        $company = CompanyModel::find($company_id);
        return view('edit_company',['oe_companies'=>$company]);
    }
    public function updateCompany($company_id){
        $company = CompanyModel::find($company_id);
        $company->company_name = request('company_name');
        $company->save();
        return redirect('/company-list');
    }
}
