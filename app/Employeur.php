<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employeur extends Model
{
    protected $fillable = array('numero_identification','denomination','raison_social','adresse_employeur');
    
    public static $rules = array(
        'numero_identification'=>'required | string',
        'denomination'=>'required | string',
        'raison_social'=>'required | string',
        'adresse_employeur'=>'required | integer',
    );

    // public function Comptes ()
    // {
    //    return $this->hasMany('App\ClientsParticuliers');
    // }
}
