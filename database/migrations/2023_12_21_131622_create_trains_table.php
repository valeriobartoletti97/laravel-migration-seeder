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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company',255);
            $table->string('departure_station',255);
            $table->string('arrival_station',255);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code',6);
            $table->tinyInteger('carriages')->unsigned();
            $table->tinyInteger('in_time')->default(1)->unsigned();
            $table->tinyInteger('deleted')->default(0)->unsigned();
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
        Schema::dropIfExists('trains');
    }
};
