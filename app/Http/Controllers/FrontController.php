<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Home;

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
        return view('frontend.home',compact('dt_home'));
    }

    public function signup()
    {
        return view('frontend.register');
    }




}
