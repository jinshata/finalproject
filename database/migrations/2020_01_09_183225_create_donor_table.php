<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donor', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('receiver');
            $table->integer('receiver_id')->unsigned();
            $table->foreign('receiver_id')->references('fk_receiver_id')->on('receiver');
             $table->integer('donor_id')->unsigned();
            $table->foreign('donor_id')->references('login_id')->on('user_login');
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
        Schema::dropIfExists('donor');
    }
}
