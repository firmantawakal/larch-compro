<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\JenisPembangunan;
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
        $dt_setting = Setting::where('id', 1)->first();
        return view('frontend.home',compact('dt_home', 'dt_setting'));
    }

    public function signup()
    {
        $jenisPembangunan = JenisPembangunan::orderBy('nama_jenis', 'asc')->get();
        $dt_setting = Setting::where('id', 1)->first();
        return view('frontend.register',compact('jenisPembangunan', 'dt_setting'));
    }




}
