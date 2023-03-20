<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoris extends Model
{
    use HasFactory;

    protected $fillable = ['idbarang','jumlah','harga','barang','idpelanggan','pelanggan','alamat'];
}
?>