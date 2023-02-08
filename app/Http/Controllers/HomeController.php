<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function edit($section)
    {
        $dt_home = Home::where('id', 1)->first();
        return view('admin.home',compact('dt_home', 'section'));
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
            $value = $request->except([
                'section1_image_old',
                'section2_image1_old',
                'section2_image2_old',
                'section3_image_old',
                'section4_image_old',
                'section5_image_old',
                'section6_image_old',
                'section',
                '_token',
                '_method'
            ]);

            if ($request->hasfile('section1_image')) {
                $value['section1_image'] = $this->upload($request, 'section1_image');
            }
            if ($request->hasfile('section2_image1')) {
                $value['section2_image1'] = $this->upload($request, 'section2_image1');
            }
            if ($request->hasfile('section2_image2')) {
                $value['section2_image2'] = $this->upload($request, 'section2_image2');
            }
            if ($request->hasfile('section3_image')) {
                $value['section3_image'] = $this->upload($request, 'section3_image');
            }
            if ($request->hasfile('section4_image')) {
                $value['section4_image'] = $this->upload($request, 'section4_image');
            }
            if ($request->hasfile('section5_image')) {
                $value['section5_image'] = $this->upload($request, 'section5_image');
            }
            if ($request->hasfile('section6_image')) {
                $value['section6_image'] = $this->upload($request, 'section6_image');
            }

            Home::where('id',$id)->update($value);

            return redirect()->route('home', $request->section)
                        ->with('success','Update Berhasil');
        }  catch (\Exception $ex) {
            dd($ex);
        }
    }

    public function setting()
    {
        $dt_setting = Setting::where('id', 1)->first();
        return view('admin.setting',compact('dt_setting'));
    }

    public function setting_action(Request $request, $id)
    {
        try {
            $value['whatsapp'] = $request->whatsapp;

            Setting::where('id',$id)->update($value);

            return redirect()->route('home.setting', 1)
                        ->with('success','Update Berhasil');
        }  catch (\Exception $ex) {
            dd($ex);
        }
    }

    public function upload($request, $fieldName){
        $image = $request->file($fieldName);
        $random = mt_rand(1000000000, 9999999999);
        $destinationPath = 'image/home/';
        $name = date('YmdHis-').$random."." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $name);
        $old = $fieldName."_old";

        if ($request->$old!=null) {
            if (file_exists(public_path().'/image/home/'.$request->$old)){
                unlink("image/home/".$request->$old);
            }
        }
        return $name;
    }
}
