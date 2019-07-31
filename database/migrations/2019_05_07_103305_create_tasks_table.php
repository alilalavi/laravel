<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable()->default(null);
            $table->string('description')->nullable()->default(null);
            $table->unsignedBigInteger('status_id')->nullable()->default(null);
            $table->unsignedBigInteger('person_id')->nullable()->default(null);
            $table->unsignedBigInteger('priority_id')->nullable()->default(null);
            $table->date('start_time')->nullable()->default(null);
            $table->date('deadline')->nullable()->default(null);
            $table->date('reject')->nullable()->default(null);
            $table->date('done')->nullable()->default(null);

            $table->timestamps();

            $table->softDeletes();

            /*KEY*/
            $table->foreign('status_id')->references('id')->on('status')->
            onDelete('cascade')->onUpdate('cascade');

            $table->foreign('person_id')->references('id')->on('person')->
            onDelete('cascade')->onUpdate('cascade');

            $table->foreign('priority_id')->references('id')->on('priority')->
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
        Schema::dropIfExists('tasks');
    }
}
