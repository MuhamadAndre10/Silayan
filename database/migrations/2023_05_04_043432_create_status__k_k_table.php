<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * status kepala keluarga seperti : kepala keluarga, istri, anak
     */
    public function up(): void
    {
        Schema::create('familiy_status', function (Blueprint $table) {
            $table->id();
            $table->string("name", 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('familiy_status');
    }
};
