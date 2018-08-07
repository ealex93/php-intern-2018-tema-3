<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Company;

class CompaniesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }

    /**
     * Return all companies
     */
    public function showAllCompanies(){

        $companies = Company::all();
        
        return json_encode($companies);
    }

    public function getCompanyById($id){
        // $company = Company::getById($id);

        $company = Company::find($id);


         return json_encode($company);
    }

    public function create(Request $request)
    {
        $company = Company::create($request->all());
        return response()->json($company);
    }

    public function update($id, Request $request)
    {
        $company = Company::findOrFail($id);
        $company->update($request->all());

        return response()->json($company);
    }

    public function delete($id)
    {
        $company=Company::find($id)->delete();
        return response('Deleted Successfully');
    }



    // public function getCompanyByType($type){
    //     echo 2;
    //     $companies = Company::where('type',$type)->get();

    //     // return json_encode($companies);
    // }
}
