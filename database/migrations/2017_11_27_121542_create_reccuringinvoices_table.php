<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReccuringinvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reccuringinvoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoicenumber');
            $table->string('account');
            $table->decimal('amount', 8, 2);
            $table->date('duedate');
            $table->string('type');
            $table->string('status');
            $table->string('transactiontype');
            $table->integer('customer')->unsigned();
            $table->foreign('customer')->references('customer_id')->on('customers');
            $table->integer('items')->unsigned();
            $table->foreign('items')->references('id')->on('items');
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
        Schema::drop('reccuringinvoices');
    }
}
