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
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->foreignId('role_id')->constrained();
            $table->string('avatar')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->text('address')->nullable();
            $table->string('postal_code',10)->nullable();
            $table->string('phone_num')->unique();
            $table->timestamp('phone_num_verified_at')->nullable();
            $table->string('melli_code')->nullable();
            $table->string('melli_card')->nullable();
            $table->string('melli_card_back')->nullable();
            $table->timestamp('melli_card_verified_at')->nullable();
            $table->timestamp('birthday')->nullable();
            $table->boolean('status')->default(0);
            $table->unsignedBigInteger('phone_model_id')->nullable();
            $table->string('phone_model_other')->nullable();
            $table->string('email')->nullable()->unique();
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
