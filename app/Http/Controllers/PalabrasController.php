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
        // $datos = DB::table('palabras')->where('sin_acentos','=','abada')->get();
        $datos = DB::table('palabras')->where('palabra_id', 1)->get();
        return ($datos);
        // dd($datos);
        // return view('palabras');
    }
}
