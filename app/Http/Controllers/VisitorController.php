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
        $visitors = Visitor::latest()->paginate(10);
        $visitors_archive = Visitor::latest()->paginate(10);
        return view('admin.visitor', compact('visitors','visitors_archive'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.visitor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        // Visitor::create($validated);

        
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
        return view('admin.visitor.edit',compact('visitor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request,Visitor $visitor)
    {
        $validated = $request->validate([
            'name'        => 'string|max:100',
            'email'       => 'required|string|min:5|unique:visitors,email,'.$visitor->id,
            'role'        => 'required',
            'password'    => '',
        ]);

        if (isset($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
        }

        $visitor->update($validated);

        return redirect()->route('visitor.index')
                        ->with('success','Data visitor berhasil diubah');
    }

    public function updateProfile(Request $request,Visitor $visitor)
    {
        $validated = $request->validate([
            'name'        => 'string|max:100',
            'no_telp'     => 'string',
            'alamat'      => 'string',
            'email'       => 'unique:visitors,email,'.$visitor->id,
        ]);

        if($request->input('password')!== null) {
            $validated['password'] = bcrypt($request->input('password'));
        }

        try {
            Visitor::find($visitor->id)->update($validated);
            return redirect()->route('dashboard')
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
        DB::table('visitors')->where('id', $id)->update(['status' => 0]);

        return redirect()->route('visitor.index')
                        ->with('success','Data visitor berhasil di arsipkan');
    }

    public function unarchive($id)
    {
        DB::table('visitors')->where('id', $id)->update(['status' => 1]);

        return redirect()->route('visitor.index')
                        ->with('success','Data visitor berhasil di aktifkan');
    }
}
