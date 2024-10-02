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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('hp');
            $table->integer('armor');
            $table->float('speed');
            $table->integer('attack_number');
            $table->integer('attack_damage');
            $table->float('attack_speed');
            $table->string('image_path')->default('img/default.png');
            $table->integer('price_minerals')->default(0);
            $table->integer('price_vespene')->default(0);
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
        Schema::dropIfExists('units');
    }
};
