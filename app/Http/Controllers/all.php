<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class all extends Controller
{
    public function inserer(Request $request){
        var_dump($request->check1);
        die();
    }





    public function index(){   
        
        // if($request->isMethod("POST"))
        // {
        //     if($this->isCsrfTokenValid('client_token',$request->request->get('token')))
        //     {
        //         if($request->check1=="Particulier")
        //         {
                    
                   
                    
        //         }
        //         else if($request->check1=="Entreprise")
        //         {
          

        //         }
        //     }
        
        //}
        return view('pages/index');

    }
}
