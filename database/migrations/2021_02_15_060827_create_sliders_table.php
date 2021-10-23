<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('activetitle');
            $table->string('activedescription');
            $table->binary('img');
            $table->string('secondtitle');
            $table->string('seconddescription');
            $table->binary('secondimg');
            $table->string('thirdtitle');
            $table->string('thirdddescription');
            $table->binary('thirdimg');
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
        Schema::dropIfExists('sliders');
    }
}
