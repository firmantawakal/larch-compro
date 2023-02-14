<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\JenisPembangunan;
use App\Models\Section;
use App\Models\Section4;
use App\Models\Setting;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dt_home = Home::where('id', 1)->first();
        $section2 = Section::where('section', 2)->get();
        $section1 = Section::where('section', 1)->get();
        $section7 = Section::where('section', 7)->get();
        $section4 = Section4::all();
        $dt_setting = Setting::where('id', 1)->first();
    return view('frontend.home',compact('dt_home', 'dt_setting', 'section2', 'section7', 'section1', 'section4'));
    }

    public function signup()
    {
        $jenisPembangunan = JenisPembangunan::orderBy('nama_jenis', 'asc')->get();
        $dt_setting = Setting::where('id', 1)->first();
        return view('frontend.register',compact('jenisPembangunan', 'dt_setting'));
    }

    public function team()
    {
        $dt_setting = Setting::where('id', 1)->first();
        return view('frontend.team',compact('dt_setting'));
    }

     public function detail($section, $id)
    {
        $sectionData = Section::where('id', $id)->first();
        $dt_home = Home::where('id', 1)->first();
        $dt_setting = Setting::where('id', 1)->first();
        $view = 'frontend.detailSection2';
        
        return view($view,compact('dt_home', 'dt_setting', 'sectionData'));
    }




}
