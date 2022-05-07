<?php

use App\Models\Ville;
use App\Models\Adresse;
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
        Schema::create('universites', function (Blueprint $table) {
            $table->id();
            $table->string('nom_universite');
            $table->string('image_universite');
            $table->string('site_universite');
            $table->foreignIdFor(Ville::class)->constrained();
            $table->foreignIdFor(Adresse::class)->constrained();
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
        Schema::dropIfExists('universites');
    }
};
