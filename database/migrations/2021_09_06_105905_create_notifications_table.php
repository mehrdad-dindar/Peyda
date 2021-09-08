<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('sender_id')->nullable();
            $table->unsignedInteger('type')->nullable();
            $table->boolean('seen')->default(0);
            $table->string('title')->nullable();
            $table->text('body')->nullable();
            $table->text('link')->nullable();
            $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('type')->references('id')->on('notification_types')->onDelete('cascade');
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
        Schema::dropIfExists('notifications');
    }
}
