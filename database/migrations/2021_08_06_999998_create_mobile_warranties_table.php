<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobileWarrantiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_warranties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id');
            $table->unsignedBigInteger('phone_model_id')->nullable;
            $table->timeStamp('expiry_date')->nullable();
            $table->string('activation_code')->unique();
            $table->timeStamp('activation_date')->nullable();
            $table->string('transfer_code')->nullable();
            $table->unsignedBigInteger('price_range')->nullable;
            $table->boolean('fire_gift')->default(false);
            $table->integer('status')->default(1);
            $table->unsignedBigInteger('addition_fire_commitment_id')->nullable();
            $table->timestamps();
        });
        Schema::table('mobile_warranties',function (Blueprint $table){
            $table->foreign('owner_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('phone_model_id')
                ->references('id')
                ->on('phone_models')
                ->onDelete('cascade');
            $table->foreign('price_range')
                ->references('id')
                ->on('commitment_ceilings')
                ->onDelete('cascade');
            $table->foreign('addition_fire_commitment_id')
                ->references('id')
                ->on('fire_commitment_ceilings')
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
        Schema::dropIfExists('mobile_warranties');
    }
}
