<?php

namespace App\Http\Controllers;

use App\Models\Candidate;


use Illuminate\Http\Request;

class CreateCandidateProfile extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('candidate_profile');
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
            'first_name' => 'required|min:3|max:30',
            'last_name' => 'required|min:3|max:30',
            'phone_number' => 'required|numeric',
            'linkedin' => 'required|min:3',
            'github' => 'required|min:3',
            'education' => 'required|min:1|max:20',
            'role_id' => 'required|min:1|max:20',
        ]);

        // Create a Candidate object
        $candidate = new Candidate;
        Candidate::create([
            first_name = $request->first_name;
            last_name = $request->last_name;
            phone_number = $request->phone_number;
            linkedin = $request->linkedin;
           github = $request->github;
            education = $request->education;
            role_id = $request->role_id;
        ])


        // Save it in the DB and check if it worked
        if ($candidate->save())
            return redirect('dashboard')->with('success', 'Profile created successfully');
        else
            return 'Problem inserting';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
