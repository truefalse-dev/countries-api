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
            $table->string('alias_name')->unique();
            $table->string('name')->nullable();
            $table->string('alias_capital')->unique();
            $table->string('capital')->nullable();
            $table->float('population')->nullable();
            $table->float('area')->nullable();
            $table->string('languages')->nullable();
            $table->string('continent')->nullable();
            $table->string('flags')->nullable();
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
