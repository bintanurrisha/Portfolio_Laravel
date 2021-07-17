<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home_section;


class Hhome_sectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index(){
          $home = home_section::first();
        return view('layouts.home_section', compact('home'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'title_2' => 'required|string',
            'sub_title' => 'required|string',
            
        ]);
        $home = home_section::first();
        $home->title_1 = $request->title_1;
        $home->title_2 = $request->title_2;
        $home->sub_title = $request->sub_title;
        $home->button = $request->button;

        if($request->file('bc_img')){
            $img_file = $request->file('bc_img');
            $img_file->storeAs('public/img/','bc_img.' . $img_file->getClientOriginalExtension());
            $home->bc_img = 'storage/img/bc_img.' . $img_file->getClientOriginalExtension();
        }
        $home->save();

        return redirect()->route('admin.home')->with('success', "Home section data has been updated successfully");
     
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
