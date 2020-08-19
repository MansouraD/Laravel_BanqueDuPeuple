<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comptes extends Model
{
    protected $fillable = array('idcp','idce','type_compte','numero_agence','numero_compte','cle_rib','frais_ouverture');
    
    public static $rules = array(
        'type_compte'=>'required | string',
        'numero_agence'=>'required | integer',
        'numero_compte'=>'required | integer',
        'cle_rib'=>'required | integer',
        'frais_ouverture'=>'integer'
    );
     
    public function ClientsEntreprises ()
    {
        return $this->belongsTo('App\ClientsEntreprises');
    }

    public function ClientsParticuliers ()
    {
        return $this->belongsTo('App\ClientsParticuliers');
    }
    
     
}
