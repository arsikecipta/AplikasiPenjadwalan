<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jam;
use App\Hari;
use App\Ruang;
class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruang =  DB::table('ruang')->paginate(10);
        return view('laboran.ruang', ['ruang'=>$ruang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('laboran.input_ruang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ruang = Ruang::create([
            'kode_ruang'=> $request->kode_ruang,
            'nama_gedung'=> $request->nama_gedung,
             ]);
      
        return redirect ('laboran/ruang')->with('sukses','Data Berhasil Diinput!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ruang $ruang)
    {
        return view('laboran.edit_ruang', compact('ruang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ruang $ruang)
    {
        return view('laboran.edit_ruang', compact('ruang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Ruang $ruang)
    {
        Ruang::where('id',$ruang->id)
        ->update([
             'kode_ruang'=>$request->kode_ruang,
             'nama_gedung'=>$request->nama_gedung,
        ]);
        return redirect ('laboran/ruang')->with('sukses','Data Berhasil diUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ruang $ruang)
    {
        Ruang::destroy($ruang->id);
        return redirect ('laboran/ruang')->with('sukses','Data Berhasil Dihapus!');
    }
}
