<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    //
    protected $fillable =[

        'recommend_id',
        'user_id',
        'keterangan',
        'vote',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function recommendbook(){
        return $this->belongsTo(Recommendbook::class);
    }
}
