<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service_section;

class service_sectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function list()
    {
        $service_section = service_section::all();
        return view('layouts.Service.service_list', compact('service_section'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       // return view('layouts.facts_Srction.facts_Section_Create');
       
        return view('layouts.Service.service_create');
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
            'Title' => 'required|string',
            
        ]);
        $service_section = new service_section;
        $service_section->icon = $request->icon;
        $service_section->Title = $request->Title;
        $service_section->description = $request->description;
        $service_section->long_description = $request->long_description;
        $service_section->save();

        return redirect()->route('admin.service.create')->with('success', "Home section data has been updated successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $service = service_section::find($id);
         return view('layouts.Service.service_update', compact('service'));
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
            'Title' => 'required|string',
        ]);

        $service_section = service_section::find($id);
        $service_section->icon = $request->icon;
        $service_section->Title = $request->Title;
        $service_section->description = $request->description;
        $service_section->long_description = $request->long_description;
        $service_section->save();
        return redirect()->route('admin.service.list')->with('success','facts updated Successfully');
    }

            
     

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service_section = service_section::find($id);
        $service_section->delete();

        return redirect()->route('admin.service.list')->with('Delete','facts deleted Successfully');
    }
}
