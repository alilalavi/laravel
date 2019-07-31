<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->bigIncrements('id');
//            $table->unsignedBigInteger('task_id')->nullable()->default(null);
            $table->string('first_name', '191')->nullable()->default(null);
            $table->string('last_name', '191')->nullable()->default(null);
            $table->string('gender', '191')->nullable()->default(null);
            $table->date('date_birth', '191')->nullable()->default(null);
            $table->timestamp('last_activity')->nullable()->default(null);

            $table->timestamps();

            $table->softDeletes();
              /*KEY*/
//            $table->foreign('task_id')
//                ->references('id')->on('tasks')
//                ->onUpdate('cascade')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person');
    }
}
