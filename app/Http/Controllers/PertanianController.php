<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertanianController extends Controller
{ // untuk mengambil
    public function index (){
        $pertanian = DB::table('pertanian')->get();
        return view('backend.pertanian.index', compact('pertanian'));
    }
    // untuk menambah data
    public function create (){
        $pengalaman_kerja = null;
        return view('backend.pertanian.create', compact('pertanian'));
    }

    public function store (Request $request){
        DB::table('pertanian')->insert([ 'nama_tanaman' => $request->nama_tanaman,
        'hasil_panen' => $request->hasil_panen,
        'lama_tanam' => $request->lama_tanam, 'tanggal_panen' => $request->tanggal_panen
        ]);
        return redirect()->route('pertanian.index')
        ->with('success', 'Data pertanian baru telah berhasil disimpan.');
    }
    // untuk menghapus data
    public function destroy($id)
    {
    DB::table('pertanian')->where('id', $id)->delete();
    return redirect()->route('pertanian.index')
        ->with('success', 'Data pertanian telah berhasil dihapus.');
    }
    //untuk mengupdate data
    public function edit($id)
    {
        $pengalaman_kerja = DB::table('pertanian')->where('id', $id)->first();
        return view('backend.pertanian.edit', compact('pertanian'));
    }

    public function update(Request $request, $id)
    {
        DB::table('pertanian')->where('id', $id)->update([
            'nama_tanaman' => $request->nama_tanaman,
            'hasil_panen' => $request->hasil_panen,
            'lama_tanam' => $request->lama_tanam,
            'tanggal_panen' => $request->tanggal_panen
        ]);
        return redirect()->route('pertanian.index')
            ->with('success', 'Data pertanian telah berhasil diupdate.');
    }
}
