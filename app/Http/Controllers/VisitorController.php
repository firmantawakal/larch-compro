<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Visitor;
use App\Models\VisitorImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

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
                    ->with('images')
                    ->latest()->get();
        $visitors_archive = Visitor::where('status', 0)
                            ->with('jenisPembangunan')
                            ->with('images')
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
        ];

        $query = Visitor::create($insert);

        if ($request->hasfile('input_file')) {
            foreach ($request->input_file as $file) {
                $allowed = ['png','jpg','jpeg','pdf','docx','doc'];
                $ext = $file->extension();
                if (in_array($ext, $allowed)) {
                    $vis = new VisitorImage();
                    $vis->visitor_id = $query->id;
                    $vis->image = $this->upload($file);   
                    $vis->save();
                }
            }
        }

        if ($query) {
            $details = [
                'subject' => 'Registrasi web Larch',
                'title'   => '<h2>Registrasi Berhasil!</h2>',
                'content' => '<p>Selamat, datang di website Larch. Akun anda akan aktif setelah admin menerima registrasi. Terimakasih</p>'
            ];

            $this->sendEmail($request->email, $details);
            return response()->json('success', 202);
        } else {
            return response()->json('error', 404);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $data['status_register'] = $request->status;
    
            $query = Visitor::where('id', $id)->update($data);
            if ($query) {
                $getVis = Visitor::where('id', $id)->first();
                if ($getVis->status_register==1) {
                    $details = [
                        'subject' => 'Larch Website',
                        'title'   => '<h2>Akun diterima</h2>',
                        'content' => '<p>Selamat, akun anda telah aktif. Silahkan login menggunakan data saat anda melakukan registrasi</p>'
                    ];
                }else{
                    $details = [
                        'subject' => 'Larch Website',
                        'title'   => '<h2>Akun ditolak</h2>',
                        'content' => '<p>Akun anda ditolak. Silahkan hubungi admin untuk informasi lebih lengkap</p>'
                    ];
                }
                $this->sendEmail($getVis->email, $details);
            }
            
            return redirect()->route('visitor')
                            ->with('success','Status berhasil diubah');
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

    public function upload($image){
        $random = mt_rand(1000000000, 9999999999);
        $destinationPath = 'image/visitor/';
        $name = date('YmdHis-').$random."." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $name);
        
        return $name;
    }

    public function sendEmail($email, $details)
    {
        try {
            Mail::to($email)->send(new SendMail($details));
            return 'success';
        } catch (\Exception $ex) {
            dd($ex);
        }
        
    }
}
