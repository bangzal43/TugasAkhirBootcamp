<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
  	 protected $table = 'kategori';
    protected $fillable = ['id_kategori','kategori'];
    public $timestamps = false;
}

