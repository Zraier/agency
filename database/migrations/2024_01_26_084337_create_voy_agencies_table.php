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
        Schema::create('voy_agencies', function (Blueprint $table) {
            $table->id('id_vage');
            $table->string('pays');
            $table->string('programme');
            $table->string('date');
            $table->string('duree');
            $table->string('id_age');
            $table->enum('status',['done','arrive'])->default('arrive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voy_agencies');
    }
};
