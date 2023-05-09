<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armada_mobil', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mobil_id');

    $table->foreign('mobil_id')->references('id')->on('mobil');
            $table->integer('plat_nomer');
            $table->enum("status_mobil",['tersedia','disewa']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('armada_mobil');
    }
};
