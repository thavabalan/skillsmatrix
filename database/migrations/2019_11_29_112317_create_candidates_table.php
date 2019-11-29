<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('skills')->unsigned();
            $table->bigInteger('knowledge_level');
            $table->text('highest_certificate');
            $table->bigInteger('experience');
            $table->bigInteger('no_of_projects');
            $table->text('comment')->nullable();
            $table->timestamps();
            $table->foreign('skills')->references('id')->on('skills');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
