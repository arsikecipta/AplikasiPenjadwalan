<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Hari;
use App\Jam;
use App\Ksm;
use App\Kelas;
class JadwalpraktikumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //genetik
   



    //LARAVEL
    public function index()
    {
        // $jadwal =  DB::table('hari')
        // ->join('jam','jam.sesi','hari.sesi')
        // ->select('jam.jam', 'hari.nama_hari')
        // ->get();
        // return view('laboran.jadwal_praktikum',['jadwal_praktikum'=>$jadwal]);
        // $jadwal =  DB::table('jam')->get();
        // $a=['data' => $jadwal];
        // return view('laboran.jadwal_praktikum',['a'=>$a]);
        $data = Jam::get();
        $hari = Hari::get();
        $ksm = Ksm::all();
        $kelas = Kelas::all();
        
        return view('laboran.jadwal_praktikum', compact('data','hari','ksm','kelas'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
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
    }
}
