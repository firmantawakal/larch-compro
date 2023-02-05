<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Home;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function edit()
    {
        $dt_home = Home::where('id', 1)->first();
        return view('admin.home',compact('dt_home'));
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
        try {
            Home::where('id',$id)->update($request->except(['_token','_method']));
            return redirect()->route('home', 1)
                        ->with('success','Update Berhasil');
        }  catch (\Exception $ex) {
            dd($ex);
        }
    }
}
