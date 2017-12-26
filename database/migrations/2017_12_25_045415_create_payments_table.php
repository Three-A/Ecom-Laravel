<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id');
          $table->string('nama');
          $table->string('address_id');
          $table->string('nama_bank');
          $table->string('no_bank');
          $table->string('Jumlah_Transfer');
          $table->string('image');
          $table->string('bayar');
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
        Schema::dropIfExists('payments');
    }
}
