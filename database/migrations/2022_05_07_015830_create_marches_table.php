<?php

use App\Models\Ville;
use App\Models\Adresse;
use App\Models\Marchandise;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marches', function (Blueprint $table) {
            $table->id();
            $table->string('nom_marche');
            $table->foreignIdFor(Ville::class)->nullable()->constrained();
            $table->foreignIdFor(Adresse::class)->nullable()->constrained();
            $table->string('localisation');
            $table->string('type_marche');


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
        Schema::dropIfExists('marches');
    }
};
