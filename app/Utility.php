<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utility extends Model
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
        'logo_perusahaan',
        'judul_testimoni',
        'deskripsi_testimoni',
        'judul_brands',
        'deskripsi_brands',
        'deskripsi_kategori',
        'tentang_kami',
        'link_facebook',
        'link_instagram',
        'link_twitter',
        'link_youtube',
    ];
}
