<?php

namespace App\Http\Controllers;
use App\Models\JenisPembangunan;

use Illuminate\Http\Request;

class JenisPembangunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis_pembangunans = JenisPembangunan::latest()->get();
        return view('admin.jenis_pembangunan', compact('jenis_pembangunans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data['nama_jenis'] = $request->nama_jenis;
    
            JenisPembangunan::create($data);
    
            return redirect()->route('jenis_pembangunan')
                        ->with('success','Data berhasil ditambah');
        }  catch (\Exception $ex) {
            dd($ex);
        }
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
            $data['nama_jenis'] = $request->nama_jenis;
    
            JenisPembangunan::where('id', $id)->update($data);
    
            return redirect()->route('jenis_pembangunan')
                            ->with('success','Data berhasil diubah');
        }  catch (\Exception $ex) {
            dd($ex);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JenisPembangunan::where('id', $id)->delete();

        return redirect()->route('jenis_pembangunan')
                        ->with('success','Data berhasil dihapus');
    }
}
