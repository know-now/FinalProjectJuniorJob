<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Industry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;

class CreateCompanyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('company_profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'contact' => 'required',
            'description' => 'required|min:3|max:250',
            'company_name' => 'required|min:3',
            'date_created' => 'required',
            'number_of_employees' => 'required|numeric',
            'industry_id',

        ]);

        //Retrieve the id from the session
        $user_id = Auth::id();


        // Create a company object
        $company = new Company;

        Schema::disableForeignKeyConstraints();

        $company = Company::create([
            'contact' => $request->contact,
            'description' => $request->description,
            'company_name' => $request->company_name,
            'date_created' => $request->date_created,
            'number_of_employees' => $request->number_of_employees,
            'industry_id' => $request->industry_id,
            'user_id' => $user_id,
        ]);

        Schema::enableForeignKeyConstraints();

        // Save it in the DB and check if it worked
        if ($company->save())
            return redirect()->route('company');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user_id = Auth::id();

        $company = Company::where('user_id', $user_id)->first();
        //display company details if it exists or redirect towards company creation
        if ($company !== null) {
            $industry_id = $company->industry_id;
            $company_industry = Industry::find($industry_id);
            return view('display_company_profile', ['company' => $company, 'company_industry' => $company_industry]);
        } else
            return redirect()->route('warning-profile');


        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('edit_company');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
