<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $guarded = [];
    protected $table = 'foto';
    protected $fillable = [
        'keterangan', 'foto', 'paket_id'
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}
