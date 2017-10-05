<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->increments('transaction_id');
            $table->string('accountfrom');
            $table->string('accountto');
            $table->date('date');
            $table->string('description');
            $table->decimal('amount', 8, 2);
            $table->string('transactiontype');
            $table->decimal('debit', 8, 2);
            $table->decimal('credit', 8, 2);
            $table->decimal('balance', 8, 2);
            $table->timestamps();
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('customer_id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
