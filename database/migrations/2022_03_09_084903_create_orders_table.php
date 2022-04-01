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
            $table->integer('quantity');
            $table->unsignedBigInteger('petugasid');
            $table->foreign('petugasid')->references('id')->on('users');
            $table->unsignedBigInteger('mejaid');
            $table->foreign('mejaid')->references('id')->on('mejas');
            $table->string('totalharga');
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
