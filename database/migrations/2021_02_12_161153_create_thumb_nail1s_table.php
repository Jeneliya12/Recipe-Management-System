<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThumbNail1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thumb_nail1s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->binary('img');
            $table->binary('authorphoto');
            $table->text('shortdescription');
            $table->text('description');
            $table->text('detaildescription');
            $table->string('time');
            $table->string('cooktime');
            $table->string('yield');
            $table->text('summary');
            $table->text('ingredients');
            $table->string('methodtitle');
            $table->text('method');
            $table->text('authorintro');
            $table->string('commentor');
            $table->string('comments');
            $table->date('comments_date');
            $table->date('recipedate');
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
        Schema::dropIfExists('thumb_nail1s');
    }
}
