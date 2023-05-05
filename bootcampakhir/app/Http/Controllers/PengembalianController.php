<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PengembalianController extends Controller
{
   public function index(){
    
            //mengambil data darri database menggunakan db::table() dan disimpan ke dalam $data
            //menggunakan ->join() untuk menggabungkan tabel lainnya
            //diakhir get() untuk mengambil data array
    
            //diakhir first() jika hanya satu data yang diambil
    
            $data = DB::table('pengembalian')
            ->join('buku', 'buku.id_buku', '=', 'pengembalian.id_buku')
            ->join('mahasiswa', 'mahasiswa.nim', '=', 'pengembalian.nim')
            ->join('petugas', 'petugas.id_petugas', '=', 'pengembalian.id_petugas')
                    ->get();
    
            //tampilkan view barang dan kirim datanya ke view tersebut
            return view('pengembalian')->with('data', $data);
        }
}
