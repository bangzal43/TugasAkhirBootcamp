<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Buku;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('buku')
            ->join('kategori', 'kategori.id_kategori', '=', 'buku.id_kategori')
            ->get();
        return view('buku.buku')->with('data', $data);
    }

    public function cetakbuku()
    {
         $data = buku::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('buku.cetakbuku');
        return $pdf->download('buku.cetakbuku');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = [
        'id_buku' => $request->id_buku,
          'judul_buku' => $request->judul_buku,
          'id_kategori' => $request->id_kategori,
          'penulis_buku' => $request->penulis_buku,
          'penerbit_buku' => $request->penerbit_buku,
          'penulis_buku' => $request->penulis_buku,
          'tahun_penerbit' => $request->tahun_penerbit
      ];

      buku::create($data);

        return redirect()->route('buku.index');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_buku)
    {
         return view('buku.ubah');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_buku)
    {
       $d = buku::where('id_buku', $id_buku)->first();
       return view('buku.ubah')->with('d', $d);
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
    public function destroy($id_buku)
    {
    buku::find('id_buku')->delete();
        return redirect()->route('buku.index');
    }
}
