<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('person_id');
           // $table->unsignedBigInteger('contract_id')->nullable()->default(null);
            $table->text('token')->nullable()->default(null);
            $table->string('user_agent', 500)->nullable()->default(null);
            $table->json('input_data')->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('person_id')
                ->references('id')->on('person')
                ->onUpdate('cascade')->onDelete('cascade');
//            $table->foreign('contract_id')
//                ->references('id')->on('contracts')
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
        Schema::dropIfExists('tokens');
    }
}
