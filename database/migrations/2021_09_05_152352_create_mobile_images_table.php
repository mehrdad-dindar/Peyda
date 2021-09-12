<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobileImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_images', function (Blueprint $table) {
            $table->increments('id');
            $table->text('URL');
            $table->unsignedInteger('type')->nullable();
            $table->index('type');
            $table->foreign('type')->references('id')->on('image_fields')->onDelete('cascade');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('mobile_images');
    }
}
