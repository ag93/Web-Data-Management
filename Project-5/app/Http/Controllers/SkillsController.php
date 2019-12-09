<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skills;
use App\SkillsNonTech;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tech_skills = Skills::all();
        $non_tech_skills = SkillsNonTech::all();
        return view('pages.skills')->with('tech_skills' ,$tech_skills)->with('non_tech_skills', $non_tech_skills);
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
        //
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
        $tech_skills = Skills::all();
        $non_tech_skills = SkillsNonTech::all();
        return view('edits.edit_skills')->with('tech_skills', $tech_skills)->with('non_tech_skills', $non_tech_skills);
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
        if ($id < "11") {
            $tech_skills = Skills::find($id);
            $tech_skills->name = $request->input('name');
            $tech_skills->percent = $request->input('percent');
            $tech_skills->save();

            return redirect('/dashboard')->with('success', 'Technical Skill Updated!');

        } else {
            $non_tech_skills = SkillsNonTech::find($id);
            $non_tech_skills->name = $request->input('name');
            $non_tech_skills->percent = $request->input('percent');
            $non_tech_skills->save();

            return redirect('/dashboard')->with('success', 'Technical Skill Updated!');
        }
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
