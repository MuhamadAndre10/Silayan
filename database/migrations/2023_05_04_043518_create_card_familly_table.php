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
        Schema::create('card_body', function (Blueprint $table) {
            $table->id();
            $table->integer("nik")->unique();
            $table->string("life_status", 100);
            $table->string("name", 255);
            $table->integer("age");
            $table->enum("sex", ["laki-laki", "perempuan"]);
            $table->string("place_of_date", 100);
            $table->date("date_of_birth");
            $table->string("religion");
            $table->string("emmployment", 255);
            $table->string("marriage", 100);
            $table->string("country", 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_body');
    }
};
