<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswas.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mhs = new Mahasiswa;
        $mhs->npm = $request->get('npm');
        $mhs->nama = $request->get('nama');
        $mhs->kelas = $request->get('kelas');
        $mhs->prodi = $request->get('prodi');
        $mhs->save();

        return redirect('mhs')->with('succes', 'Data Mahasiswa Berhasil Ditambahkan !');
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
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswas.edit', compact('mahasiswa', 'id'));

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
        $mhs = Mahasiswa::find($id);
        $mhs->npm = $request->get('npm');
        $mhs->nama = $request->get('nama');
        $mhs->kelas = $request->get('kelas');
        $mhs->prodi = $request->get('prodi');
        $mhs->save();
        
        return redirect('mhs')->with('success', 'Data Mahasiswa berhasil diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->delete();
        return redirect('mhs')->with('success', 'Data Mahasiswa berhasil dihapus!');

    }
}
