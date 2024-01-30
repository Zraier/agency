<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matchmakings', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('id_emp');
            $table->string('id_agence');
            $table->string('ref_voy_user');
            $table->string('ref_voy_agence');

=======
            $table->text('id_emp');
            $table->text('id_age');
            $table->text('ref_voyu');
            $table->text('ref_voya');
>>>>>>> origin/main
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matchmakings');
    }
};
