<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cataloguebook extends Model
{
    //
    protected $fillable =[

        'recommend_id',
        'kode',
        'klarifikasi',
        'jenis',
        'subjek',
        'harga_sewa',
        'denda',
        'jenis'
    ];

    public function recommendbook(){
        return $this->belongsTo(Recommendbook::class);
    }

    public function review(){
        return $this->hasMany(Review::class);
    }
}
