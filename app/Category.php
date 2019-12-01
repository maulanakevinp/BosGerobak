<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_kategori',
        'foto',
        'deskripsi',
        'keunggulan',
        'manfaat'
    ];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
