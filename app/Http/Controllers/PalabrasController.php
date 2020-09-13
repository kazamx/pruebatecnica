<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        // return $request->palabra;
        // $datos = DB::table('palabras')->where('sin_acentos','like','abada')->get();
        // $datos = DB::table('palabras')->where('CHAR_LENGTH(sin_acentos)', 1)->get();

        $datos = DB::select('select palabra from palabras where CHARACTER_LENGTH(sin_acentos) = ?',[7]);
        
        $salida[0] = "Prueba";
        
        // return $datos;
        // return $datos->palabra;
        foreach ($datos as $dato){
            // dd($dato);
            $array = str_split("tjeuingrtsda",1);
            $dato_array = str_split($dato->palabra,1);
            // return($dato_array);
            $contador_igualdades = 0;
            for($i=0; $i<7; $i++){
                for($j = 0; $j<count($array); $j++){
                    // return count($array);
                    if($dato_array[$i] === $array[$j]){
                        $contador_igualdades++;
                        $array[$j] = null;
                        $j = count($array);
                    }
                }
                
            }
            if($contador_igualdades == 7){
                array_push ($salida, $dato->palabra);
                
            }

            
            

        }

        return ($salida);

        //return ($array);

        // dd($salida);

        // $palabras = "palabreria";
        // $array = str_split($palabras,1);
        // $array[2] = ;

        // return $array;

        // return (count($datos));
        // dd($datos);
        // return view('palabras');
    }
}
