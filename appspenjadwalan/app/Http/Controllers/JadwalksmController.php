<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Collection\links;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Hari;
use App\Ksm;
use App\Jam;
use App\Matkul;
use App\Kelas;
use App\Ruang;

class JadwalksmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //  $hari = Hari::orderBy('id')->get();
        // return view('laboran.input_jadwal', compact());
        
         if($request->has('cari')){
            if($request->has(null)){
                 return view('laboran.jadwal_ksm',['ksm'=>$ksm]);
             }else{
                $ksm = KSM::where('nama_mk','LIKE','%' .$request->cari. '%')->get();
             }
           
                        
         }
        if($request->has('tgl')){
            
             if($request->has(null)){
                 return view('laboran.jadwal_ksm',['ksm'=>$ksm]);
             }else{
             $ksm = KSM::where('created_at','LIKE','%' .$request->tgl. '%')->get();
        
         }
     }
         else{
             $ksm = Ksm::orderBy('created_at','desc')->get();
        }
        
         return view('laboran.jadwal_ksm',['ksm'=>$ksm]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laboran.input_jadwal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    $ksm = new \App\KSM;




        Ksm::create([
            'hari'=> $request->hari,
            'jam_mulai'=> $request->jam_mulai,
            'jam_berakhir'=> $request->jam_berakhir,
            'rentang' => $request->input('jam_mulai') . " - " . $request->input('jam_berakhir'),
            'kelas'=> $request->kelas,
            'ruangan'=> $request->kode_ruang,
            'kode_mk'=> $request->kode_mk,
            'nama_mk'=> $request->nama_mk,
            'sks'=> $request->sks,
            'semester'=> $request->semester,
            'tahun'=> $request->tahun,
        ]);

        return redirect ('laboran/jadwal_ksm')->with('sukses','Data Berhasil Diinput!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ksm $ksm)
    {
        return view('laboran.edit_ksm', compact('ksm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ksm $ksm)
    {  $hari = Hari::get();
        $jam = Jam::get();
        $kelas = Kelas::get();
        $ruang = Ruang::get();
        $matkul = Matkul::get();
        
        return view('laboran.edit_ksm', compact('ksm','hari','kelas','jam','ruang','matkul'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ksm $ksm)
    {
        Ksm::where('id',$ksm->id)
        ->update([
             'hari'=>$request->hari,
             'jam_mulai'=> $request->jam_mulai,
             'jam_berakhir'=> $request->jam_berakhir,
            
             'kelas'=>$request->kelas,
             'ruangan'=>$request->kode_ruang,
             'kode_mk'=>$request->kode_mk,
             'nama_mk'=>$request->nama_mk,
            

        ]);
        return redirect ('laboran/jadwal_ksm')->with('sukses','Data Berhasil diUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ksm $ksm)
    {
        Ksm::destroy($ksm->id);
        return redirect ('laboran/jadwal_ksm')->with('sukses','Data Berhasil Dihapus!');
        
    }

}
