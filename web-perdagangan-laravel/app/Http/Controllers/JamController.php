<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Jam;
use\File;
use Illuminate\Support\Str;

class JamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jam= Jam::latest()->Paginate(5);
        return view('admin.dashboard', compact('jam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg',
            'deskripsi' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'jumlah_pembelian' => 'required',
        ]);

        // Menyimpan data gambar yang diupload yang disimpan di variable gambar
        $gambar= $request->file('gambar');
        $file_name= date('Y-m-d')."_".$gambar->getClientOriginalName();

        // isi dengan nama folder tempat kemana gambar diupload
        $tujuan_upload= 'image';
        $gambar->move($tujuan_upload, $file_name);

        Jam::create([
            'nama' => $request->nama,
            'gambar' => $file_name,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'jumlah_pembelian' => $request->jumlah_pembelian,
        ]);
        return redirect('/dashboard');
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
        $jam= Jam::where('id', $id)->first();
        return view('admin.edit', compact('jam'));

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
        $jam= Jam::where('id', $id)->first();

        if($request->hasFile('gambar')){
            $request->validate([
                'nama' => 'required',
                'gambar' => 'required|file|image|mimes:jpeg,png,jpg',
                'deskripsi' => 'required',
                'harga' => 'required',
                'stok' => 'required',
                'jumlah_pembelian' => 'required',
            ]);

            // Menyimpan data gambar yang diupload yang disimpan di variable gambar
            $gambar= $request->file('gambar');
            $file_name= date('Y-m-d')."_".$gambar->getClientOriginalName();
            // mengambil data gambar yang sesuai
            $request->file('gambar')->storeAs('public/image',$file_name);
            // isi dengan nama folder tempat kemana gambar diupload
            $tujuan_upload = 'image';
            $gambar->move($tujuan_upload,$file_name);
            File::delete('image/'.$jam->gambar);

            $jam->update([
                'nama' => $request->nama,
                'gambar' => $file_name,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'jumlah_pembelian' => $request->jumlah_pembelian,
            ]);
        } else{
            $request->validate([
                'nama' => 'required',
                'deskripsi' => 'required',
                'harga' => 'required',
                'stok' => 'required',
                'jumlah_pembelian' => 'required',
            ]);

            $jam->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'jumlah_pembelian' => $request->jumlah_pembelian,
            ]);
        }
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        // hapus file
        $jam = Jam::where('id', $id)->first();
        File::delete('image/'.$jam->gambar);

        // hapus data
        Jam::where('id', $id)->delete();
        return redirect('/dashboard');
    }





    // daftar user
    public function daftaruser()
    {
        $daftar = DB::table('tb_user')->get();
        return view('admin.daftar-user',['daftar' => $daftar]);
    }

    public function tambah()
    {

    }

    public function delete($id)
    {
        DB::table('tb_user')->where('id',$id)->delete();
        return redirect('/daftaruser');
    }
}
