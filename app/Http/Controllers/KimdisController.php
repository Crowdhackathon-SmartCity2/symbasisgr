<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KimdisController extends Controller
{

    public function showAllProducts()
    {
        return response()->json(Product::all());
    }

    public function findAdam($adam)
    {
        // Το ΚΗΜΔΗΣ δεν έχει public API ακόμα, οπότε για την παρουσίαση χρησιμοποιούμε json αρχείο
        /*
        $baseUrl = 'https://url.gov.gr/opendata/';  
 
        $resp = get_http_response_code($baseUrl . \Request::input('ada'));
        if ($resp == '200') 
        {
            $str = file_get_contents($baseUrl . \Request::input('ada'));
            
            if ($str === false) {
                    return '';
            }
              
            $data = null;
            $data = json_decode($str, true);                 
            return json_encode($data);
        }  
        */
        if ($adam =='18REQ003236893') {
            $path = public_path('json/kos.json');
        } else {
            $path = public_path('json/adam.json');
        }

        $json = json_decode(file_get_contents($path), true); 

        return $json;
    }

    
}