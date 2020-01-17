<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_account', function (Blueprint $table) {
            $table->Increments('register_id');
            $table->integer('fk_login_id')->unsigned();
            $table->foreign('fk_login_id')->references('login_id')->on('user_login');
            $table->string('fullname');
            $table->string('address');
            $table->string('gender');
            $table->string('contactno');
            $table->string('district');
            $table->string('state');
            $table->string('country');
            $table->string('pincode');
            $table->string('usertype');
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
        Schema::dropIfExists('user_account');
    }
}
