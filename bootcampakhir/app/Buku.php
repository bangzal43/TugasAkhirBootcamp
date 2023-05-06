<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
  	 protected $table = 'buku';
    protected $fillable = ['id_buku','judul_buku','id_kategori','penerbit_buku','penulis_buku','tahun_penerbit'];
    public $timestamps = false;
}