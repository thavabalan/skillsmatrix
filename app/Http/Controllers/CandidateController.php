<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use App\Skill;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $candidates = Candidate::all();
      $skills = Skill::all();
      return view('candidate.index')->withCandidates($candidates)->withSkills($skills);
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
      $candidate = new Candidate;
      $candidate -> knowledge_level = $request -> knowledge_level;
      $candidate -> highest_certificate = $request -> highest_certificate;
      $candidate -> no_of_projects = $request -> no_of_projects;
      $candidate -> experience = $request -> experience;
      $candidate -> comment = $request -> comment;
      $candidate -> save();
      $candidate->skills()->sync($request->skills, false);

      return redirect()->route('candidates.index');
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
