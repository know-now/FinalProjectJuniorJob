<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\CandidateLanguage;
use App\Models\CandidateSkill;
use App\Models\Role;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use App\Models\Language;
use App\Models\User;

class CreateCandidateProfileController extends Controller
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
        //dd($request);
        //Retrieve the id from the session
        $user_id = Auth::id();

        //get input array
        $skills = $request->skills;
        $languages = $request->languages;

        $request->validate([
            'first_name' => 'required|min:3|max:30',
            'last_name' => 'required|min:3|max:30',
            'phone_number' => 'required|numeric',
            'linkedin' => 'required|min:3',
            'github' => 'required|min:3',
            'education' => 'required|min:1|max:20',
            'cv' => 'required',
            'role_id' => 'required|min:1|max:20',
            'languages' => 'required',
            'skills' => 'required',
        ]);


        //storing the CV on the local disk
        $cv = $request->file('cv');
        $file_name = $cv->getClientOriginalName();

        if (!empty($cv)) {
            $path = public_path() . '/uploads/';
            $cv->move($path, $file_name);
        } else {
            return redirect()->back()->withInput();
        }

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
            'cv' => $file_name,
            'role_id' => $request->role_id,
            'user_id' => $user_id,
        ]);

        $candidate_id = $candidate->id;

        //insert into candidate_languages table depending on checked boxes
        $candidate_language = new CandidateLanguage;
        foreach ($languages as $language) {
            $candidate_language = CandidateLanguage::create([
                'candidate_id' => $candidate_id,
                'language_id' => $language,
            ]);
        }


        //insert into candidate_skills table depending on checked boxes
        $candidate_skill = new CandidateSkill;
        foreach ($skills as $skill) {
            $candidate_skill = CandidateSkill::create([
                'candidate_id' => $candidate_id,
                'skill_id' => $skill,
            ]);
        }

        Schema::enableForeignKeyConstraints();

        // Save it in the DB and check if it worked
        if ($candidate->save() && $candidate_language->save() && $candidate_skill->save())
            return redirect()->route('/profile');
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
        $candidate = Candidate::where('user_id', $user_id)->first();
        if ($candidate !== null) {
            //storing the values of the received objects into variables we'll use later
            $role_id = $candidate->role_id;
            $candidate_id = $candidate->id;

            //retrieving the role, language and skill values from their respective tablesds
            $candidate_role = Role::find($role_id);
            $candidate_language = Candidate::find($candidate_id)->languages;
            $candidate_skill = Candidate::find($candidate_id)->skills;

            //this will display the candidates who have this role usefol for the filtering later
            //$candidate_role = Role::find($role_id)->candidate;

            //retrieve CV and display
            $candidate_cv = $candidate->cv;
            $file_path = public_path() . '/uploads/' . $candidate_cv;
            //$uploaded_file = file_get_contents($file_path);
            //dd($uploaded_file);
            return view('display_candidate_profile', ['candidate' => $candidate, 'candidate_role' => $candidate_role, 'candidate_language' => $candidate_language, 'candidate_skill' => $candidate_skill, 'cv' => $candidate_cv]);
        } else
            return redirect()->route('warning-profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
