<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Barang extends Model
{
    public $timestime=false;
    protected $table='tbl_barang';
    protected $fillable=['nama_produk','harga','gambar'];
}
