<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progres extends Model
{
    protected $table = 'progres';
    // protected $fillable = [
    //     'keuangan', 'fisik', 'paket_id'
    // ];
    protected $guarded = [];

    // use \Znck\Eloquent\Traits\BelongsToThrough;
    // protected $fillable = [
    //     'kdsatker', 'nmpaket', 'pagurmp', 'trgoutput', 'satoutput', 'trgoutcome', 'satoutcome','kdoutput','TahunFisik','pagurmawal','keuangan','progres_fisik'
    // ];

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}
