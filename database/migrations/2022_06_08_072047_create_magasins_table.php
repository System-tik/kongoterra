<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagasinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magasins', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->integer("ville_id");
            $table->string("adresse");//[adresse, longi, lat]
            $table->string("longi")->nullable($value = true);//[adresse, longi, lat]
            $table->string("lat")->nullable($value = true);//[adresse, longi, lat]
            /* $table->json("pv")->nullable($value = true);//[idp, qte] */
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
        Schema::dropIfExists('magasins');
    }
}
