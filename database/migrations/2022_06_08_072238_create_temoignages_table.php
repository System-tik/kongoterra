<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemoignagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temoignages', function (Blueprint $table) {
            $table->id();
            $table->text("contenu");
            $table->text("lien")->nullable();
            $table->string("nom");
            $table->string("prenom");
            $table->string("adresse");
            $table->string("pays");
            $table->string("email")->nullable();
            $table->string("tel");
            $table->integer("age");
            $table->string("sexe");
            $table->boolean('enceinte')->default($value = false);
            $table->string("maladie");
            $table->string("methode");
            $table->json("signe");
            $table->string("center_ttt");
            $table->string("prescripteur");
            $table->boolean("type_prescri");
            $table->integer("jour_t");
            $table->integer("mois_t");
            $table->integer("an_t");
            $table->text("ttt");//plante medicinales
            $table->string("type_ttt");
            $table->integer("dosage");//en gramme par personne
            $table->string("mode_prepar");
            $table->integer("nb_prise");//par jour
            $table->integer("nb_jour");
            $table->json("evolu_temp")->nullable();//evolution de la temperature
            $table->json("evolu_paras")->nullable();//evolution de la parasitemie
            $table->json("effet_ind")->nullable();//effets indesirables observes
            $table->boolean("rechute");
            $table->date("date_rechute");
            $table->string("dep_res")->nullable();//depistage de resistance
            $table->string("remarque")->nullable();

            
            //sans oublier la photo
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
        Schema::dropIfExists('temoignages');
    }
}
