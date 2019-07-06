<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable =[

        'user_id',
        'recommend_id',
        'keterangan',
        'review'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cataloguebook(){
        return $this->hasOne(Cataloguebook::class);
    }
}
