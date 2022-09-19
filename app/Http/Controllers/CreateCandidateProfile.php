<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\CandidateLanguage;
use App\Models\CandidateSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CreateCandidateProfile extends Controller
{
    function get_id($user_id)
    {
        //Retrieve the id from the session
        $user_id = session('user_id');
        return $user_id;
    }
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
        //dd($request->languages);
        $request->validate([
            'first_name' => 'required|min:3|max:30',
            'last_name' => 'required|min:3|max:30',
            'phone_number' => 'required|numeric',
            'linkedin' => 'required|min:3',
            'github' => 'required|min:3',
            'education' => 'required|min:1|max:20',
            'role_id' => 'required|min:1|max:20',
        ]);

        //Retrieve the id from the session
        $user_id = session('user_id');

        // Create a Candidate object
        $candidate = new Candidate;

        Schema::disableForeignKeyConstraints();

        $candidate = Candidate::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'linkedin' => $request->linkedin,
            'github' => $request->github,
            'education' => $request->education,
            'role_id' => $request->role_id,
            'user_id' => $user_id,
        ]);

        $candidate_id = $candidate->id;

        //insert into candidate_languages table
        $candidate_language = new CandidateLanguage;
        $candidate_language = CandidateLanguage::create([
            'candidate_id' => $candidate_id,
            'language_id' => $request->languages,
        ]);

        //insert into candidate_skills table
        $candidate_skill = new CandidateSkill;
        $candidate_skill = CandidateSkill::create([
            'candidate_id' => $candidate_id,
            'skill_id' => $request->skills,
        ]);

        Schema::enableForeignKeyConstraints();

        // Save it in the DB and check if it worked
        if ($candidate->save() && $candidate_language->save() && $candidate_skill->save())
            return redirect()->route('profile', ['id' => 1]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidate = Candidate::find($id);
        return view('display_candidate_profile', ['candidate' => $candidate]);
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
