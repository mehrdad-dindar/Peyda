<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarrantyProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warranty_problems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mobile_warranty_id');
            $table->foreign('mobile_warranty_id')
                ->references('id')
                ->on('mobile_warranties');
            $table->unsignedBigInteger('warranty_problem_type_id');
            $table->foreign('warranty_problem_type_id')
                ->references('id')
                ->on('warranty_problem_types');
            $table->integer('price')->nullable();
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
        Schema::dropIfExists('warranty_problems');
    }
}
