<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnniversariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anniversaries', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->bigInteger("user_id")->references('id')->on('users')->comment("ユーザーID");
            $table->bigInteger("people_id")->references('id')->on('people')->comment("人物ID");
            $table->string("genre")->comment("記念日ジャンル");
            $table->date("date");
            $table->string("memo");
            $table->uuid('anniversary_hash')->unique()->comment('記念日のUUID');
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
        Schema::dropIfExists('anniversaries');
    }
}