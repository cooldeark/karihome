<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKarihomeUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karihome_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->timestamps();
            $table->string('name');
            $table->string('sex');
            $table->string('birth');
            $table->string('identityID');
            $table->string('phone');
            $table->string('address');
            $table->string('whichStore');
            $table->string('facebook_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karihome_user');
    }
}
