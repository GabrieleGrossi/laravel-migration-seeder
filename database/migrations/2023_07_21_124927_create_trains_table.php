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
            $table->timestamps();
            $table->string('agency', 40);
            $table->string('departure_stration', 40);
            $table->string('arrival_station', 40);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->smallInteger('train_code')->unsigned();
            $table->tinyInteger('number_of_carriages')->unsigned();
            $table->boolean('on_time')->default(true);
            $table->boolean('in_late')->default(false);
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
