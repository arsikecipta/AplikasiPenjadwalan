<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jam;
use App\Hari;
use App\Kelas;
class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas =  DB::table('kelas')->paginate(10);
        return view('laboran.kelas', ['kelas'=>$kelas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $kelas =Kelas::all();
       
        return view('laboran.input_kelas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kelas = Kelas::create([
            'kelas'=> $request->kelas,
            'angkatan'=> $request->angkatan,
             ]);
      
          

       
       
        return redirect ('laboran/kelas')->with('sukses','Data Berhasil Diinput!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        return view('laboran.edit_kelas', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        return view('laboran.edit_kelas', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Kelas $kelas)
    {
        Kelas::where('id',$kelas->id)
        ->update([
             'kelas'=>$request->kelas,
             'angkatan'=>$request->angkatan,
        ]);
        return redirect ('laboran/kelas')->with('sukses','Data Berhasil diUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        Kelas::destroy($kelas->id);
        return redirect ('laboran/kelas')->with('sukses','Data Berhasil Dihapus!');
    }
}
