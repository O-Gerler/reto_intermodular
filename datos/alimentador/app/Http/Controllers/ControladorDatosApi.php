<?php

namespace App\Http\Controllers;

use App\Models\Zona_el_tiempo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ControladorDatosApi extends Controller
{
    public function extraerDatos()
    {
        $url = 'https://www.el-tiempo.net/api/json/v2/provincias';

        $respuesta = json_decode(@file_get_contents($url), true);

        $arrayProvincias = $respuesta['provincias'];

        foreach($arrayProvincias as $provincia) {
            $zona_el_tiempo = new Zona_el_tiempo(); 
            $zona_el_tiempo->province_code = $provincia['CODPROV'];
            $zona_el_tiempo->name = $provincia['NOMBRE_PROVINCIA'];
            $zona_el_tiempo->save();
        }
    }
}
