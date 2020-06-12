<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balai extends Model
{
    protected $table = 'balai';

    public function satker()
    {
        return $this->hasMany(Satker::class);
    }
    public function paket()
    {
        return $this->hasMany(Paket::class);
    }
    public function kodeoutput()
    {
        return $this->hasManyThrough(Kodeoutput::class, Paket::class, 'balai_id', 'kdoutput', 'id', 'kdoutput');
    }
    public function progres()
    {
        return $this->hasManyThrough(Progres::class, Paket::class);
    }
}
