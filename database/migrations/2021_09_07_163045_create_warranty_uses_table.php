<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarrantyUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warranty_uses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('descriptions');
            $table->string('images');
            $table->integer('percentage')->default(0);
            $table->unsignedBigInteger('warranty_id');
            $table->boolean('status')->default(0);
            $table->foreign('warranty_id')
                ->references('id')
                ->on('mobile_warranties')
                ->onDelete('cascade');
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
        Schema::dropIfExists('warranty_uses');
    }
}
