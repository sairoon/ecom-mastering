<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function company(){
        return view('admini.company.company',[
            'companies'=>Company::all(),
        ]);
    }
    public function saveCompany(Request $request){
        $company = new company();
        $company->company_name = $request->company_name;
        $company->save();
        return back();
    }
    public function status2($id){
        $company= Company::find($id);
        if ($company->status2==1){
            $company->status2=0;
            $company->save();
            return back();
        }
        else{
            $company->status2=1;
            $company->save();
            return back();
        }
    }
    public function delete2($id){
        $company=Company::find($id);
        $company->delete();
        return back();
    }
    public function editCompany($id){
        return view('admini.category.editCompany',[
            'companies'=>Company::find($id),
        ]);
    }
}
