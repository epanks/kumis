<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Das extends Model
{
    protected $table = 'das';
    // protected $primaryKey = 'kddas';
    // public $incrementing = false;
    // protected $keyType = 'string';
    protected $fillable = [
        'kddas', 'nmdas', 'kdws'
    ];

    // public function ws()
    // {
    //     return $this->belongsTo(Ws::class, 'kdws', 'kdws');
    // }
}
