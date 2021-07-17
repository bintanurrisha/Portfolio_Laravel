<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\skill_section;

class skills_sectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function list()
    {
        $skill_section = skill_section::all();
        return view('layouts.skills_section.list', compact('skill_section'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('layouts.skills_section.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'skill' => 'required|string',
            'score' => 'required|string',
        ]);

        $skill_section = new skill_section;
        $skill_section->skill = $request->skill;
        $skill_section->score = $request->score;

        $skill_section->save();

        return redirect()->route('admin.skill.create')->with('success','New skill Created Successfully');
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
        $skills = skill_section::find($id);
        return view('layouts.skills_section.edit', compact('skills'));
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
         $this->validate($request, [
            'skill' => 'required|string',
            'score' => 'required|string',
        ]);

        $skill_section = skill_section::find($id);
        $skill_section->skill = $request->skill;
        $skill_section->score = $request->score;

        $skill_section->save();

        return redirect()->route('admin.skill.list')->with('success','New skill Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $skills = skill_section::find($id);
        $skills->delete();

        return redirect()->route('admin.skill.list')->with('success','skill Deleted Successfully');
    }
}
