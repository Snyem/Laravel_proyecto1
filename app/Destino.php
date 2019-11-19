<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    protected $table = 'destinos';
    protected $primaryKey = 'destID';
    public $timestamps = false;

    public function relRegion()    //esto se puede llamar de cualquier manera
    {
        return $this->belongsTo('\App\Region', 'regID', 'regID');
                                //(related:tabla_a_unir, primaryKey:foreing_key_en_Destinos, ownerKey:foreing_key_en_Regiones)
    }
}
