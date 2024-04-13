<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Subsidiary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubsidiaryController extends Controller
{
    public function index(){
        $subsidiaries =DB::table('subsidiaries')
            ->join('companies', 'subsidiaries.company_id', '=', 'companies.id')
            ->select('subsidiaries.*', 'companies.company_name')
            ->get();

        return view('admini.company.subsidiary',[
            'companies'=>Company::all(),
            'subsidiaries'=>$subsidiaries,
        ]);
    }
    public function saveSubsidiary(Request $request){
        $subsidiary =new Subsidiary();
        $subsidiary->company_id=$request->company_id;
        $subsidiary->subsidiary_name=$request->subsidiary_name;
        $subsidiary->save();
        return back();
    }
    public function status3($id){
        $subsidiary= Subsidiary::find($id);
        if ($subsidiary->status3==1){
            $subsidiary->status3=0;
            $subsidiary->save();
            return back();
        }
        else{
            $subsidiary->status3=1;
            $subsidiary->save();
            return back();
        }
    }
    public function delete3($id){
        $subsidiary=Subsidiary::find($id);
        $subsidiary->delete();
        return back();
    }
}
