<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
   public $timestamps = false;
   protected $fillable = ['id_buku','judul_buku','id_kategori','penerbit_buku','penulis_buku','tahun_penerbit'];
}