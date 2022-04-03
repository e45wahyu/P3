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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('transaksiid');
            $table->string('orderid');
            $table->string('koderorder');
            $table->string('totalhargabayar');
            $table->string('totaldibayar');
            $table->string('metodepembayaran');
            $table->string('pdfurl')->nullable();
            $table->unsignedBigInteger('petugasid');
            $table->foreign('petugasid')->references('id')->on('users');
            $table->enum('status',['success','failed','denied','expired','canceled','deleted']);
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
        Schema::dropIfExists('transaksis');
    }
};
