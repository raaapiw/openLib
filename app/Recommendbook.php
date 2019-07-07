<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommendbook extends Model
{
    //
    protected $fillable =[

        'user_id',
        'nama_buku',
        'pengarang',
        'penerbit',
        'jenis',
        'penyunting',
        'penerjemah',
        'abstrak',
        'kota_penerbit',
        'tahun_terbit',
        'cover'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function vote(){
        return $this->hasMany(Vote::class);
    }

    public function cataloguebook(){
        return $this->hasOne(Cataloguebook::class);
    }
}
