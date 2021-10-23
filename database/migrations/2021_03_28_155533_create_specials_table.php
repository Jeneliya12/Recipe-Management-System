<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specials', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->binary('img');
            $table->text('shortdescription');
            $table->text('description');
            $table->text('nav1')->nullable();
            $table->text('nav2')->nullable();
            $table->text('nav3')->nullable();
            $table->text('nav4')->nullable();
            $table->text('nav5')->nullable();
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
        Schema::dropIfExists('specials');
    }
}
