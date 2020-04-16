<?php

namespace App\Http\Controllers\Services;

use App\Models\Ppd;
use App\Models\Port;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ListsController extends Controller
{
    
    public function listports()
    {
         $ports = new Port;
         $ports = $ports->all()->toArray();
         $portss = [];
         foreach($ports as $oport){
            $portss[$oport['id']] = $oport['name'];
         }
        return $portss;
    }

    public function listppds()
    {
         $ppds = new Ppd;
         $ppds = $ppds->all()->toArray();
         $ppdss = [];
         foreach($ppds as $oppds){
            $ppdss[$oppds['id']] = $oppds['name'];
         }
        return $ppdss;
    }

}
