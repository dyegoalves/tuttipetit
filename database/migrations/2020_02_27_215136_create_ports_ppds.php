<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortsPpds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('port_ppd', function (Blueprint $table) {
            
            $table->integer('port_id')->unsigned();	
            $table->foreign('port_id')->references('id')->on('ports')->onDelete('cascade');

            $table->integer('ppd_id')->unsigned();	
            $table->foreign('ppd_id')->references('id')->on('ppds')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('port_ppd');
    }
}
