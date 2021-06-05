<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class maulanaController extends Controller
{
    public function pasien()
    {
     $pasien = DB::table('pasien')->get();
     return view('pasien0138',['pasien' => $pasien]);
    }

    public function tambah()
    {
        return view('tambah0138');
    }

    public function edit($id)
    {
        $pasien = DB::table('pasien')->where('id',$id)->get();
        return view('edit0138',['pasien' => $pasien]);
    }

    public function update(Request $request)
    {
        DB::table('pasien')->where('id',$request->id)->update([
        'nama' => $request->nama,
        'alamat' => $request->alamat
        ]);
        return redirect('/pasien');
    }
    
    public function store(Request $request)
    {
        DB::table('pasien')->insert([
        'id' => $request->id,
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        ]);
        return redirect('/pasien');
    }

    public function hapus($id)
    {
        DB::table('pasien')->where('id',$id)->delete();
        return redirect('/pasien');
    }

    public function cari(Request $request)
    {
        $cari=$request->lihat;
        $pasien=DB::table('pasien')->where('nama','like',"%".$cari."%")->paginate();
        return view('pasien0138',['pasien' => $pasien]);
    }
}