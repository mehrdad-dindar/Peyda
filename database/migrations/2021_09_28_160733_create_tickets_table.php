<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('importance')->default(1);
            $table->integer('closed')->default(0);
            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')
                ->references('id')
                ->on('units');
            $table->unsignedBigInteger('sender_id');
            $table->foreign('sender_id')
                ->references('id')
                ->on('users');
            $table->boolean('seen')->nullable();
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
        Schema::dropIfExists('tickets');
    }
}
