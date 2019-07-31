<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->unsignedBigInteger('creator_id');
            $table->unsignedBigInteger('task_id');
            $table->timestamps();

            $table->softDeletes();

            /*KEY*/
            $table->foreign('task_id')->references('id')->on('tasks')->
            onDelete('cascade')->onUpdate('cascade');

            $table->foreign('creator_id')->references('id')->on('person')->
            onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
