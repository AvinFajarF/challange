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
        Schema::create('supir', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("alamat");
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->enum('supir', ['disewa', 'tersedia']);
            $table->integer('umur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('supir');
    }
};
