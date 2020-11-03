<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jam extends Model
{

    protected $table = 'tb_jam';
    protected $fillable = [
        'nama','gambar','deskripsi','harga','stok','created_at','updated_at',
    ];
}
