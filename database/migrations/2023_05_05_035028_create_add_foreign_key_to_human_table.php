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
        Schema::table('card_body', function (Blueprint $table) {
            $table->foreignId("growth_status_id")->constrained(table: "growth_status");
            $table->foreignId("familiy_status_id")->constrained(table: "familiy_status");
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
