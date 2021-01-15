<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jam;
use App\Hari;
class JamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jam =  DB::table('jam')->paginate(10);
        return view('laboran.jam', ['jam'=>$jam]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $jam =Jam::all();
        $hari =Hari::all();
        return view('laboran.input_jam');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jam = Jam::create([
            'jam_mulai'=> $request->jam_mulai,
            'jam_berakhir'=> $request->jam_berakhir,
            'rentang' => $request->input('jam_mulai') . " - " . $request->input('jam_berakhir'),
             ]);
      
           

       
       
        return redirect ('laboran/jam')->with('sukses','Data Berhasil Diinput!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Jam $jam)
    {
        return view('laboran.edit_jam', compact('jam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Jam $jam)
    {
        return view('laboran.edit_jam', compact('jam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Jam $jam)
    {
        Jam::where('id',$jam->id)
        ->update([
             'jam_mulai'=>$request->jam_mulai,
             'jam_berakhir'=>$request->jam_berakhir,
        ]);
        return redirect ('laboran/jam')->with('sukses','Data Berhasil diUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jam $jam)
    {
        Jam::destroy($jam->id);
        return redirect ('laboran/jam')->with('sukses','Data Berhasil Dihapus!');
    }
}
