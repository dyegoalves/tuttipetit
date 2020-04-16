<?php

use App\Models\Ppd;
use App\Models\Port;
use App\Models\Activity;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
        //Cadastro das atividades
        $atividades = Storage::disk('local')->get('atividades.txt');
        $atividades = explode("\n", $atividades);
        foreach($atividades as $atividade){
            Activity::create(['name' => $atividade]);
        }

        //Cadastro dos Ports
        $ports = ['MICRO' , 'PEQUENO' , 'MEDIO' , 'GRANDE', 'EXCEPCIONAL'];
        foreach($ports as $port){
            Port::create(['name' => $port]);
        }

        //Cadastro do ppds
        $ppds   = ['PEQUENO' , 'MEDIO' , 'GRANDE'];
        foreach($ppds as $ppd){
            Ppd::create(['name' =>$ppd]);
        }


    }
}
