<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Visitor;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitors = Visitor::where('status', 1)
                    ->with('jenisPembangunan')
                    ->latest()->get();
        $visitors_archive = Visitor::where('status', 0)
                            ->with('jenisPembangunan')
                            ->latest()->get();
        return view('admin.visitor', compact('visitors','visitors_archive'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = [
            "nama" => $request->nama,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "alamat" => $request->alamat,
            "kota" => $request->kota,
            "no_telp" => $request->no_telp,
            "jenis_pembangunan" => $request->jenis_pembangunan,
            "issame_location" => $request->issame_location,
            "alamat_lokasi" => $request->issame_location == 1 ? $request->alamat : $request->alamat_lokasi,
            "kota_lokasi" => $request->issame_location == 1 ? $request->kota : $request->kota_lokasi,
            "luas_tanah1" => $request->luas_tanah1,
            "luas_tanah2" => $request->luas_tanah2,
            "file" => $request->input_file,
        ];

        $query = Visitor::create($insert);

        if ($query) {
            return response()->json('success', 202);
        } else {
            return response()->json('error', 404);
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
        Visitor::where('id', $id)->update(['status' => 0]);

        return redirect()->route('visitor')
                        ->with('success','Data visitor berhasil di arsipkan');
    }

    public function unarchive($id)
    {
        Visitor::where('id', $id)->update(['status' => 1]);

        return redirect()->route('visitor')
                        ->with('success','Data visitor berhasil di aktifkan');
    }
}
