<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home_section;
use App\Models\facts;
use App\Models\skill_section;
use App\Models\skill_head_section;
use App\Models\about;
use App\Models\Social_link_section;
use App\Models\service_section;

class PageController extends Controller
{
   public function index(){
       
        $home = home_section::first();
        $facts = facts::all();
        $skill_section = skill_section::all();
        $skill_head_sections = skill_head_section::first();
        $about = about::first();
        $Social_link_section = Social_link_section::all();
        $service_section = service_section::all();
        return view('pages.index' ,compact ('home','facts','skill_section','skill_head_sections','about','Social_link_section','service_section'));
    }
     public function show($id){
       $service = service_section::find($id);
        return view('pages.service',compact ('service'));
    }
    public function dashboard(){
        return view('layouts.dashboard');
    }

}

