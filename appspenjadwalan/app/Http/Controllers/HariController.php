<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Hari;
use App\Jam;
class HariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $hari =  DB::table('hari')->get();
        $hari = Hari::orderBy('id')->paginate(6);
        return view('laboran.hari',['hari'=>$hari]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // \App\Hari::create($request->all());
        // return redirect ('laboran/hari')->with('sukses','Data Berhasil Diinput!');
        $jam =Jam::all();
        $hari =Hari::all();
        return view('laboran.input_hari', compact('jam','hari'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    { 
         $hari = Hari::create([
        'nama_hari'=> $request->nama_hari,
      
         ]);
  

     

        return redirect ('laboran/hari')->with('sukses','Data Berhasil Diinput!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hari
     * @return \Illuminate\Http\Response
     */
    public function show(Hari $hari)
    {
         return view('laboran.edit_hari', compact('hari'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hari $hari)
    {
        return view('laboran.edit_hari', compact('hari'));
    }

    /**
     * Update the specified resource in storage
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hari $hari)
    {
        Hari::where('id',$hari->id)
        ->update([
             'nama_hari'=>$request->nama_hari,
        ]);
        return redirect ('laboran/hari')->with('sukses','Data Berhasil diUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hari $hari)
    {
        Hari::destroy($hari->id);
        return redirect ('laboran/hari')->with('sukses','Data Berhasil Dihapus!');
    }

   
}
