<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientsEntreprises extends Model
{
    protected $fillable = array('statut_juridique','nom_entreprise','ninea','adresse_entreprise','tel_entreprise','email_entreprise');
    
    public static $rules = array(
        'statut_juridique'=>'required | string',
        'nom_entreprise'=>'required | string',
        'ninea'=>'required | integer',
        'adresse_entreprise'=>'required | string',
        'tel_entreprise'=>'string',
        'email_entreprise'=>'string',
    );

     public function Comptes ()
    {
       return $this->hasMany('App\Comptes');
    }
}
