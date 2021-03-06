<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaladsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->float('price');
            $table->binary('img');
            $table->text('shortdescription');
            $table->text('description');
            $table->text('detaildescription');
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
        Schema::dropIfExists('salads');
    }
}
