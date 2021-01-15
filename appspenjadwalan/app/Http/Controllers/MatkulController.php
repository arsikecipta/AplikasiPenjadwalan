<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jam;
use App\Hari;
use App\Ruang;
use App\Matkul;
class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     * untuk menampilkan data dari tabel matkul
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matkul =  DB::table('matkul')->get();
        return view('laboran.matkul', ['matkul'=>$matkul]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('laboran.input_matkul');
    }

    /**
     * Store a newly created resource in storage.
     * untuk menyimpan data ke database
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matkul = Matkul::create([
            'kode_mk'=> $request->kode_mk,
            'nama_mk'=> $request->nama_mk,
            'sks'=> $request->sks,
            'semester'=> $request->semester,
            'tahun'=> $request->tahun,
             ]);
      
        return redirect ('laboran/matkul')->with('sukses','Data Berhasil Diinput!');
    }

    /**
     * Display the specified resource.
     *menapilk
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Matkul $matkul)
    {
        return view('laboran.edit_matkul', compact('matkul'));
    }

    /**
     * Show the form for editing the specified resource.
     * untuk proses edit matakuliah
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Matkul $matkul)
    {
        return view('laboran.edit_matkul', compact('matkul'));
    }

    /**
     * Update the specified resource in storage.
     *update data yg ingin di edit
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Matkul $matkul)
    {
        Matkul::where('id',$matkul->id)
        ->update([
            'kode_mk'=> $request->kode_mk,
            'nama_mk'=> $request->nama_mk,
            'sks'=> $request->sks,
            'semester'=> $request->semester,
            'tahun'=> $request->tahun,
        ]);
        return redirect ('laboran/matkul')->with('sukses','Data Berhasil diUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     * menghapus data
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matkul $matkul)
    {
        Matkul::destroy($matkul->id);
        return redirect ('laboran/matkul')->with('sukses','Data Berhasil Dihapus!');
    }

    public function regist(Request $request){
        $Regis=Regis::create([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        }
}

