<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_produk',
        'spesifikasi',
        'harga',
        'kategori_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Cateogory','kategori_id','id');
    }
}
