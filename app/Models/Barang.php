<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barangs';
    // protected $fillable = ['namabarang','hargabarang','ketersediaan','gambarbarang','kategoribarang','deskripsibarang'];
    protected $guarded = [];
    protected $appends = ['foto'];
    public function getFotoAttribute()
    {
        # code...
        // return asset()
        if ($this->gambarbarang == null) {
            # code...
            // return asset('img/noimage.png');
            return "https://st3.depositphotos.com/23594922/31822/v/450/depositphotos_318221368-stock-illustration-missing-picture-page-for-website.jpg";
        }else {
            # code...
            return asset('foto_produk/'.$this->gambarbarang);
        }
    }
}
