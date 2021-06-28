<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\User;
use App\Sensor;
use App\Ratadata;

class PetaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profil = User::all();

        return view ('profile', compact('profil'));
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
        $data=User::find($id);
        return view('edit_profile',compact('data'));
    }
    
    public function update(Request $request, $id)
    {
        $profile = \App\User::find($id); //memanggil satu data pasien
        $profile -> update($request->all()); //memperbaharui semua data sesuai inputan
        if ($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $profile->foto = $request->file('foto')->getClientoriginalName();
            $profile->save();
           
        }
        return redirect('/profile')->with('sukses','Data berhasil diubah'); 
    }
    
    public function delete($id)
    {
        $delete = Sensor::find($id); //memanggil satu data pasien
        $delete-> delete();
        return redirect('riwayat_lahan')->with('sukses','Data berhasil dihapus'); 
        
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
    public function ratadata()
    {
        $rata = new Ratadata;
        $sensor=Sensor::avg('kelembapan',);
        $sensor1=Sensor::avg('ph');
        $hapus = Sensor::truncate();

        $rata->kelembapan= $sensor;
        $rata->ph= $sensor1;
        // dd($sensor);
        $rata->save();
    }

    // public function fotoProfile($id)
    // {
    //     $data=User::find($id);
    //     return view('foto_profile',compact('data'));
    // }
}
