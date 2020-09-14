<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Util\Json;
use stdClass;

// use App\Http\Controllers\DB;

class PalabrasController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $tiempo_inicio = microtime(true);
        $datos = DB::select('select palabra from palabras where CHARACTER_LENGTH(sin_acentos) = ?', [7]);
        $salida[] = "";
       
        foreach ($datos as $dato) {
            $array = str_split("tjeuingrtsda", 1); // 1. Es mejor que haga esto una sola vez.
            $dato_array = str_split($dato->palabra, 1);
            $contador_igualdades = 0;

            for ($i = 0; $i < 7; $i++) {
                for ($j = 0; $j < count($array); $j++) { // (1) Se deben invertir las palabras para que no
                                                         // sea obligatorio realizar el punto 1 varias veces.
                    if ($dato_array[$i] === $array[$j]) {
                        $contador_igualdades++;
                        $array[$j] = null;
                        $j = count($array);
                    }
                }

            }
            if ($contador_igualdades == 7) {
                array_push($salida, $dato->palabra);
            }

        }
        // unset($salida[0]);
        $tiempo_fin = microtime(true);
        $salida_json = new stdClass();
        $salida_json->tiempo = $tiempo_fin - $tiempo_inicio;
        $salida_json->cantidad = count($salida)-1;
        $salida_json->palabras = $salida;
        $salida_json = json_encode($salida_json);
 
        return $salida_json;
        // return ($salida);
    }

    public function otro(Request $request)
    {
        $tiempo_inicio = microtime(true);
        $datos = DB::select('select palabra from palabras where CHARACTER_LENGTH(sin_acentos) = ?', [8]);
        $salida[] = "";
        $array = str_split("tjeuingrtsda", 1); // 1. Es mejor que haga esto una sola vez.
       
        foreach ($datos as $dato) {
            
            $dato_array = str_split($dato->palabra, 1);
            $contador_igualdades = 0;

            for ($i = 0; $i < count($array); $i++) {
                for ($j = 0; $j < count($dato_array); $j++) { // (1) Se deben invertir las palabras para que no
                                                         // sea obligatorio realizar el punto 1 varias veces.
                    if ($array[$i] === $dato_array[$j]) {
                        $contador_igualdades++;
                        $dato_array[$j] = null;
                        $j = count($dato_array);
                    }
                }

            }
            if ($contador_igualdades == 7) {
                array_push($salida, $dato->palabra);
            }

        }
        $tiempo_fin = microtime(true);
        $salida_json = new stdClass();
        $salida_json->tiempo = $tiempo_fin - $tiempo_inicio;
        $salida_json->cantidad = count($salida)-1;
        $salida_json->palabras = $salida;
        $salida_json = json_encode($salida_json);


        
        return $salida_json;
        // return ($salida);
    }
    
}








