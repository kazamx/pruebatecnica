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
    public function __invoke(Request $request){
    $tiempo_inicio = microtime(true);
    $datos = DB::select('select sin_acentos from palabras where CHARACTER_LENGTH(sin_acentos) = ?', [$request->cantidad]);
    $salida[] = "";
    $array = str_split($request->palabra, 1); // 1. Es mejor que haga esto una sola vez.

    foreach ($datos as $dato) {
        
        $dato_array = str_split($dato->sin_acentos, 1);
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

        if ($contador_igualdades === count($dato_array)) {
            array_push($salida, $dato->sin_acentos);
        }
    }

    unset($salida[0]);

    $tiempo_fin = microtime(true);
    // $salida_json = new stdClass();
    // $salida_json->tiempo = $tiempo_fin - $tiempo_inicio;
    $tiempo = $tiempo_fin - $tiempo_inicio;
    $cantidad = count($salida);
    // $salida_json->palabras = $salida;
    // $salida_json = json_encode($salida_json);

    return view('palabras',compact('salida','tiempo','cantidad'));
    // return ($salida);
}

}