<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            $table->string('transaction_number',20)->unique();
            $table->string('reason',50);

            $table->decimal('amount', 15, 2);
            $table->enum('type', ['Debit','Credit']);
            $table->enum('receipt_method', ['Cash','Virement Banquaire','Compte Paydunyia','GSM']);
            $table->mediumText('receipt_details');
            $table->enum('status', ['Pending','failed','Success']);


            $table->foreignId('customer_account_id')->constrained();
            $table->foreignId('currency_id')->constrained();

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
        Schema::dropIfExists('transactions');
    }
};
