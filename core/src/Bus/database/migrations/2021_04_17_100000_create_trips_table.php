<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('station1_id')->unsigned()->nullable();
            $table->foreign('station1_id')->references('id')->on('stations')->onDelete('cascade');

            $table->bigInteger('station2_id')->unsigned()->nullable();
            $table->foreign('station2_id')->references('id')->on('stations')->onDelete('cascade');

            $table->integer('order')->unsigned()->default(1);
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
        Schema::dropIfExists('trips');
    }
}
