<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhoneModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone_models', function (Blueprint $table) {
            $table->id();
            $table->string('url_hash');
            $table->unsignedBigInteger('phone_brand_id');
            $table->string('name');
            $table->string('picture')->nullable();
            $table->string('released_at')->nullable();
            $table->string('body')->nullable();
            $table->string('os')->nullable();
            $table->string('storage')->nullable();
            $table->string('display_size')->nullable();
            $table->string('display_resolution')->nullable();
            $table->string('camera_pixels')->nullable();
            $table->string('video_pixels')->nullable();
            $table->string('ram')->nullable();
            $table->string('chipset')->nullable();
            $table->string('battery_size')->nullable();
            $table->string('battery_type')->nullable();
            $table->text('specifications');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::table('phone_models',function (Blueprint $table) {
            $table->foreign('phone_brand_id')
                ->references('id')
                ->on('phone_brands')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phone_models');
    }
}
