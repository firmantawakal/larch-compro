<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\JenisPembangunan;
use App\Models\Section2;
use App\Models\Section7;
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
        $section2 = Section2::all();
        $section7 = Section7::all();
        $dt_setting = Setting::where('id', 1)->first();
        return view('frontend.home',compact('dt_home', 'dt_setting', 'section2', 'section7'));
    }

    public function signup()
    {
        $jenisPembangunan = JenisPembangunan::orderBy('nama_jenis', 'asc')->get();
        $dt_setting = Setting::where('id', 1)->first();
        return view('frontend.register',compact('jenisPembangunan', 'dt_setting'));
    }

     public function detail($section, $id)
    {
        $sectionData = Section2::where('id', $id)->first();
        $dt_home = Home::where('id', 1)->first();
        $dt_setting = Setting::where('id', 1)->first();
        $view = 'frontend.detailSection2';
        if ($section==7) {
            $sectionData = Section7::all();
            $view = 'frontend.detailSection7';
        }
        
        return view($view,compact('dt_home', 'dt_setting', 'sectionData'));
    }




}
