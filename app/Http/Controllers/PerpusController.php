<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerpusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_buku = DB::table('tb_buku')->get();

        return view('daftar_buku', ['data_buku' => $data_buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah_buku');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('tb_buku')->insert([
            'kode_buku' => $request->kode_buku,
            'judul_buku' => $request->judul_buku,
            'penerbit' => $request->penerbit,
            'tahun' => $request->tahun,
            ]);
        
        return redirect()->action('PerpusController@index')->with('status', 'Buku berhasil ditambahkan!');
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
        //
        $data_buku = DB::table('tb_buku')->first();

        return view('edit_buku', ['data_buku' => $data_buku]);
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
        //
        //Menyimpan data yang di ubah
        $update_data = DB::table('tb_buku')
              ->where('kode_buku', $id)
              ->update([
                  'kode_buku' => $request->kode_buku,
                  'judul_buku' => $request->judul_buku,
                  'penerbit' => $request->penerbit,
                  'tahun' => $request->tahun
                  ]);

              return redirect('daftar_buku')->with('status', 'Data buku berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('tb_buku')->where('kode_buku', '=', $id)->delete();
        return redirect('daftar_buku')->with('status', 'Data buku berhasil dihapus!');
    }

    public function laporan()
    {
        $laporan = DB::table('tb_buku')->get();

        return view ('/laporan',['laporan'=>$laporan]);
    }

    public function cetaklaporan()
    {
        $cetak_laporan = DB::table('tb_buku')->get();

        return view ('/cetak_laporan',['cetak_laporan'=>$cetak_laporan]);
    } 
}
