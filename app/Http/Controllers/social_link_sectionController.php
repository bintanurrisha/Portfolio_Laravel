<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social_link_section;

class social_link_sectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
     public function list()
    {
         $Social_link_section = Social_link_section::all();
        return view('layouts.edit profile.social_link_list', compact('Social_link_section'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('layouts.edit profile.social_link_edit');
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
            'Link' => 'required|string',
        ]);

        $Social_link_section = new Social_link_section;
        $Social_link_section->icon = $request->icon;
        $Social_link_section->Link = $request->Link;

        $Social_link_section->save();

        return redirect()->route('admin.Social_link.list')->with('success','New Social_link Created Successfully');
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
         $Social_link = Social_link_section::find($id);
         return view('layouts.edit profile.social_link_update', compact('Social_link'));
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
            'Link' => 'required|string',
        ]);

        $Social_link_section = Social_link_section::find($id);
        $Social_link_section->icon = $request->icon;
        $Social_link_section->Link = $request->Link;

        $Social_link_section->save();

        return redirect()->route('admin.Social_link.list')->with('success','New facts Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $Social_link_section = Social_link_section::find($id);
        $Social_link_section->delete();

        return redirect()->route('admin.Social_link.list')->with('Delete','Social Icon deleted Successfully');
    }
}
