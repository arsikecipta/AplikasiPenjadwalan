<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Akunlaboran;
use Illuminate\Support\Str;

class AkunlaboranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       

        //table user
        $user = new \App\User;
        
        $user->username= $request->username;
        $user->email= $request->email;
        $user->password= bcrypt($request->password);
        $user->remember_token= Str::random(60);
        $user->role='laboran';
        $user->save();

         
        
        return redirect ('kaurlab/akun_laboran')->with('sukses','Data Berhasil Diinput!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Akunlaboran::create([
        //     'email'=> $request->email,
        //     'nama_lengkap'=> $request->name,
        //     'username'=> $request->username,
        //     'password'=> $request->password,
        //     $user->role ='laboran'
        // ]);

        // return redirect ('kaurlab/akun_laboran')->with('sukses','Data Berhasil Diinput!');
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
