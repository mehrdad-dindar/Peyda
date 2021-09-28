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
            $table->string('phone_model_other')->nullable();
            $table->timeStamp('expiry_date')->nullable();
            $table->string('activation_code')->unique();
            $table->timeStamp('activation_date')->nullable();
            $table->string('transfer_code')->nullable();
            $table->string('images')->nullable();
            $table->unsignedBigInteger('commitment_ceiling_id')->nullable;
            $table->boolean('fire_gift')->default(false);
            $table->unsignedBigInteger('status_id');
            $table->string('tax')->nullable();
            $table->integer('usable_percentage')->default(100);
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
            $table->foreign('commitment_ceiling_id')
                ->references('id')
                ->on('commitment_ceilings')
                ->onDelete('cascade');
            $table->foreign('addition_fire_commitment_id')
                ->references('id')
                ->on('fire_commitment_ceilings')
                ->onDelete('cascade');
            $table->foreign('status_id')
                ->references('id')
                ->on('statuses');
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
