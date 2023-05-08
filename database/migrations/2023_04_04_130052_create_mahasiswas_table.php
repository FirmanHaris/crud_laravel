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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->char('idmhs', 5);
            $table->string('nim', 10);
            $table->string('nama_lengkap', 100);
            $table->enum('gender', ['L', 'P']);
            $table->string('alamat', 100);
            $table->string('no_hp', 12);
            $table->primary('idmhs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
