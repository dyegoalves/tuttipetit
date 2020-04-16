<?php

namespace App\Http\Controllers\services;

use DateTime;
use App\Models\Ppd;
use App\Models\Port;
use IntlDateFormatter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DataHoraController extends Controller
{


    public function dataext( )
    {

           
            $atividades = Storage::disk('local')->get('atividades.txt');

            

            date_default_timezone_set('America/Sao_Paulo');
            $data = new DateTime();
            $formatter = new IntlDateFormatter('pt_BR',
                                        IntlDateFormatter::FULL,
                                        IntlDateFormatter::NONE,
                                        'America/Sao_Paulo',          
                                        IntlDateFormatter::GREGORIAN);
            $dataf = ucwords($formatter->format($data));
            return $dataf ;

            //$ports->ppds()->attach($ppd);

    }

    public function salvarcalculo(Request $request )
    {

        $name = $request;
        $port = new Port;
        $ppd =  new Ppd;
        //$port->ppds()->attach($ppd);

        dd($name = $request->all());

    }
}
