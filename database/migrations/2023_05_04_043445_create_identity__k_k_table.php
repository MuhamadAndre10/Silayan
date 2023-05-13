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
        Schema::create('card_header', function (Blueprint $table) {
            $table->id();
            $table->integer("nik")->unique();
            $table->string("address", 255);
            $table->integer("rt");
            $table->integer("rw");
            $table->string("country", 255);
            $table->string("distric", 255);
            $table->string("city", 255);
            $table->string("province", 255);
            $table->integer("postal_code");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_header');
    }
};
