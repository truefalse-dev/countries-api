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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('alias')->unique();
            $table->string('name')->nullable();
            $table->string('city');
            $table->string('capital')->nullable();
            $table->float('population')->nullable();
            $table->float('area')->nullable();
            $table->string('languages')->nullable();
            $table->string('iso')->nullable();
            $table->string('flag')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
