<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class all extends Controller
{

public function pageForm(){
    return view('pages.index');
}


    public function index(Request $request){   
        
        if($request->check1=="Particulier")
        {
             $result1 = DB::table('clients_particuliers')->insertGetId([
                'nom'=> $request->nom_client, 
                'prenom'=> $request->prenom_client, 
                'date_de_naissance'=> $request->datenaiss, 
                'cni'=> $request->cni, 
                'adresse'=> $request->adresse_client, 
                'telephone'=> $request->tel_client, 
                'mail'=> $request->email_client, 
                'profession'=> $request->profession, 
                'salaire'=> $request->salaire 
            ]);

            $result3 = DB::table('comptes')->insertGetId([
                'type_compte'=> $request->type_compte, 
                'numero_agence'=> $request->numero_agence, 
                'numero_compte'=> $request->numero_compte, 
                'cle_rib'=> $request->cle_rib, 
                'frais_ouverture'=> $request->frais_ouverture, 
            ]);

            if($request->check3=="salarie")
            {
                $result2 = DB::table('employeurs')->insertGetId([
                    'denomination'=> $request->denomination, 
                    'raison_social'=> $request->raison_social, 
                    'numero_identification'=> $request->numero_identification, 
                    'adresse'=> $request->adresse_employeur
                ]);


            //     $result = DB::table('clients_particuliers')->insertGetId([

            //         'statut'=>"1",

            //     ]);

            // }else
            // {
            //     $result = DB::table('clients_particuliers')->insertGetId([

            //         'statut'=>"0",

            //     ]); 
            }     
        }
        else if($request->check1=="Entreprise")
        {
            $result1 = DB::table('clients_entreprises')->insertGetId([

                'statut'=> $request->statut_juridique, 
                'denomination'=> $request->nom_entreprise, 
                'ninea'=> $request->ninea, 
                'adresse'=> $request->adresse_entreprise, 
                'telephone'=> $request->tel_entreprise, 
                'mail'=> $request->email_entreprise, 
            
            ]);

                $result2 = DB::table('comptes')->insertGetId([

                    'type_compte'=> $request->type_compte, 
                    'numero_agence'=> $request->numero_agence, 
                    'numero_compte'=> $request->numero_compte, 
                    'cle_rib'=> $request->cle_rib, 
                    'frais_ouverture'=> $request->frais_ouverture, 
                ]);
    
          

        }
   
    }
      
}