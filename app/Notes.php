<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    protected $table = 'notes';
    protected $fillable = [
        'nmcatatan', 'keterangan', 'lampiran', 'paket_id'
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
    public function kategori_lampiran()
    {
        return $this->belongsTo(Kategori_lampiran::class);
    }
}
