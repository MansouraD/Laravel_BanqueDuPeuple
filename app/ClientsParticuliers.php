<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientsParticuliers extends Model
{
    protected $fillable = array('ide','nom_client','prenom_client','datenaiss','cni','adresse_client','tel_client','email_client','profession','statut','salaire','employeur');
    
    public static $rules = array(
        'nom_client'=>'required | string',
        'prenom_client'=>'required | string',
        'datenaiss'=>'required | datetime',
        'cni'=>'required | string',
        'adresse_client'=>'string',
        'tel_client'=>'string',
        'email_client'=>'string',
        'profession'=>'string',
        'statut'=>'string',
        'salaire'=>'string',
        'employeur'=>'string'
    );

     public function Comptes ()
    {
       return $this->hasMany('App\Comptes');
    }

    // public function Employeur ()
    // {
    //     return $this->belongsTo('App\Employeur');
    // }
}
