<?php

use App\Models\Hotel;
use App\Models\Marche;
use App\Models\Provenance;
use App\Models\Universite;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->integer('statut_user');

            $table->foreignIdFor(Role::class)->constrained();
            $table->foreignIdFor(Hotel::class)->constrained();
            $table->foreignIdFor(Universite::class)->constrained();
            $table->foreignIdFor(Document::class)->constrained();
            $table->foreignIdFor(Marche::class)->constrained();
            $table->foreignIdFor(Provenance::class)->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
