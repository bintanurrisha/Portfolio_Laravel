<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\facts;

class facts_sectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
         $facts = facts::all();
        return view('layouts.facts_Srction.facts_Section_list', compact('facts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.facts_Srction.facts_Section_Create');
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
            'icon' => 'required|string',
            'Counter' => 'required|string',
            'description' => 'required|string', 
        ]);

        $facts = new facts;
        $facts->icon = $request->icon;
        $facts->Counter = $request->Counter;
        $facts->description = $request->description;

        $facts->save();

        return redirect()->route('admin.facts.create')->with('success','New facts Created Successfully');
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
         $fact = facts::find($id);
         return view('layouts.facts_Srction.facts_section_edit', compact('fact'));
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
            'icon' => 'required|string',
            'Counter' => 'required|string',
            'description' => 'required|string' 
        ]);

        $facts = facts::find($id);
        $facts->icon = $request->icon;
        $facts->Counter = $request->Counter;
        $facts->description = $request->description;

        $facts->save();

        return redirect()->route('admin.facts.list')->with('success','facts updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fact = facts::find($id);
        $fact->delete();

        return redirect()->route('admin.facts.list')->with('Delete','facts deleted Successfully');
    }
}
