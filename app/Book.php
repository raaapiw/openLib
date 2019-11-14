<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
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
        'cover',
        'synopsis',
        'votes',
        'reviews',
        'points',
        'type',
        'code',
        'rating'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function votess(){
        return $this->hasMany(Vote::class);
    }

    public function reviewss(){
        return $this->hasMany(Review::class);
    }
}
