<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('receiver', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('fk_receiver_id')->unsigned();
            $table->foreign('fk_receiver_id')->references('login_id')->on('user_login');

            $table->string('needtype');
            $table->string('subcategory');
            $table->string('quantity');
            $table->date('needdate');
            $table->string('status');

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
        Schema::dropIfExists('receiver');
    }
}
