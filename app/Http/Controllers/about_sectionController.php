<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;

class about_sectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = about::first();
        return view('layouts.about.about', compact('about'));
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
            'title_1' => 'required|string',
            'sub_title' => 'required|string', 
             'sub_title_2' => 'required|string', 
        ]);

        $about = about::first();
        $about->title_1 = $request->title_1;
        $about->sub_title = $request->sub_title;
        $about->title_2 = $request->title_2;
        $about->sub_title_2 = $request->sub_title_2;
        $about->sub_title_3 = $request->sub_title_3;
        $about->list_name_1 = $request->list_name_1;
        $about->list_description_1 = $request->list_description_1;
        $about->list_name_2 = $request->list_name_2;
        $about->list_description_2 = $request->list_description_2;
        $about->list_name_3 = $request->list_name_3;
        $about->list_description_3 = $request->list_description_3;
        $about->list_name_4 = $request->list_name_4;
        $about->list_description_4 = $request->list_description_4;
        $about->list_name_5 = $request->list_name_5;
        $about->list_description_5 = $request->list_description_5;
        $about->list_name_6 = $request->list_name_6;
        $about->list_description_6 = $request->list_description_6;
        $about->list_name_7 = $request->list_name_7;
        $about->list_description_7 = $request->list_description_7;
        $about->list_name_8 = $request->list_name_8;
        $about->list_description_8 = $request->list_description_8;
        
            
            

        if($request->file('img')){
            $img_file = $request->file('img');
            $img_file->storeAs('public/img/','img.' . $img_file->getClientOriginalExtension());
            $about->img = 'storage/img/img.' . $img_file->getClientOriginalExtension();
        }

        if($request->file('cv')){
            $pdf_file = $request->file('cv');
            $pdf_file->storeAs('public/pdf/','cv.' . $pdf_file->getClientOriginalExtension());
            $about->cv = 'storage/pdf/cv.' . $pdf_file->getClientOriginalExtension();
        }

        $about->save();

        return redirect()->route('admin.about')->with('success', "about Page data has been updated successfully");
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
