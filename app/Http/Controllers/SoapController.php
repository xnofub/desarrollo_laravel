<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use SoapClient;



class SoapController extends Controller
{
   public function WsConsulta() {
     
        
        $wsdl = 'https://esbdesa.entel.cl/crm/crmloyaltypoint/loyaltypoints/confirmacioncanjecelmediaps?wsdl';
     
        $options = array('login' => 'fide_celmedia', 'password' => 'cel_123456');
        
        try {
            $client = new SoapClient($wsdl, $options);
        } catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }

        //print_r($client);
        //return($client);
    }

}
