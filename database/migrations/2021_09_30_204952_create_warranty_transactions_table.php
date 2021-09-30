<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarrantyTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warranty_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wallet_history_id');
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('mobile_warranty_id');
            $table->foreign('mobile_warranty_id')
                ->references('id')
                ->on('mobile_warranties');
            $table->foreign('wallet_history_id')
                ->references('id')
                ->on('wallet_histories');
            $table->foreign('transaction_id')
                ->references('id')
                ->on('transactions');
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
        Schema::dropIfExists('warranty_transactions');
    }
}
