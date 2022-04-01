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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('kodeorder');
            $table->unsignedBigInteger('petugasid');
            $table->foreign('petugasid')->references('id')->on('users');
            $table->unsignedBigInteger('barangid');
            $table->foreign('barangid')->references('id')->on('barangs');
            $table->unsignedBigInteger('mejaid');
            $table->foreign('mejaid')->references('id')->on('mejas');
            $table->integer('quantity');
            $table->string('totalbayar');
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
        Schema::dropIfExists('orders');
    }
};
