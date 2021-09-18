<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('f_name');
            $table->string('l_name');
            $table->unsignedBigInteger('role_id')->default(2)->nullable();
            $table->string('avatar')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->text('address')->nullable();
            $table->string('postal_code',10)->nullable();
            $table->string('phone_num')->nullable();
            $table->timestamp('phone_num_verified_at')->nullable();
            $table->string('melli_code')->nullable();
            $table->string('melli_card')->nullable();
            $table->timestamp('melli_card_verified_at')->nullable();
            $table->timestamp('birthday')->nullable();
            $table->boolean('status')->default(0);
            $table->unsignedBigInteger('phone_model_id')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::table('users',function (Blueprint $table){
            $table->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onDelete('cascade');
            $table->foreign('phone_model_id')
                ->references('id')
                ->on('phone_models')
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
        Schema::dropIfExists('users');
    }
}
