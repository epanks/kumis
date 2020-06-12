<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ws extends Model
{

    protected $table = 'ws';
    // protected $primaryKey = 'kdws';
    // public $incrementing = false;
    // protected $keyType = 'string';
    protected $fillable = [
        'kdws', 'nmws'
    ];


    // public function das()
    // {
    //     return $this->belongsTo(Das::class, 'kdws', 'kdws');
    // }
}
