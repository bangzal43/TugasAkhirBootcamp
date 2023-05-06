<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('pengembalian')->get();
    
            //tampilkan view barang dan kirim datanya ke view tersebut
            return view('pengembalian')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createpengembalian');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = DB::table('pengembalian')
            ->join('buku', 'buku.id_buku', '=', 'pengembalian.id_buku')
            ->join('mahasiswa', 'mahasiswa.nim', '=', 'pengembalian.nim')
            ->join('petugas', 'petugas.id_petugas', '=', 'pengembalian.id_petugas')
                    ->get();
    
            //tampilkan view barang dan kirim datanya ke view tersebut
            return view('pengembalian')->with('data', $data);
      
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
